<?php
    /***
     * functions.php
     * by Alex Reyes based on pset7 CS-50 from Harvard
     ***/

    // include constants
    require_once("constants.php");

    /**
     * displays a message to user when something goes wrong
     **/
    function apologize ($message)
    {
        render(["apology"], ["message" => $message]);
    }

    /**
     * dump shows the contents of an array for testing purposes
     **/
     function dump ($array = [])
     {
        require("../templates/dump.php");
        exit;
     }

    /**
     * Logs out current user, if any.  Based on Example #1 at
     * http://us.php.net/manual/en/function.session-destroy.php.
     */
    function logout()
    {
        // unset any session variables
        $_SESSION = [];

        // expire cookie
        if (!empty($_COOKIE[session_name()]))
        {
            setcookie(session_name(), "", time() - 42000);
        }

        // destroy session
        session_destroy();
    }


    /**
    * Redirects user to destination, which can be
    * a URL or a relative path on the local host.
    *
    * Because this function outputs an HTTP header, it
    * must be called before caller outputs any HTML.
    */
    function redirect($destination)
    {
        // handle URL
        if (preg_match("/^https?:\/\//", $destination))
        {
            header("Location: " . $destination);
        }

        // handle absolute path
        else if (preg_match("/^\//", $destination))
        {
            $protocol = (isset($_SERVER["HTTPS"])) ? "https" : "http";
            $host = $_SERVER["HTTP_HOST"];
            header("Location: $protocol://$host$destination");
        }

        // handle relative path
        else
        {
            // adapted from http://www.php.net/header
            $protocol = (isset($_SERVER["HTTPS"])) ? "https" : "http";
            $host = $_SERVER["HTTP_HOST"];
            $path = rtrim(dirname($_SERVER["PHP_SELF"]), "/\\");
            header("Location: $protocol://$host$path/$destination");
        }

        // exit immediately since we're redirecting anyway
        exit;
    }



    /**
     * Renders template, passing in values.
     */
    function render($template = [], $values = [])
    {
        // extract variables into local scope
        extract($values);

        // render header controller
        require("../include/header.php");

        // render header template
        require("../templates/header.php");
        
        // if template exists, render it
        $h = $template[0];
        if (file_exists("../templates/$h.php"))
        {
            // render template(s) from array
            foreach ($template as $temp)
            {
                require("../templates/$temp.php");
            }
        }
        
        // if template doesn't exist render in construction
        else
        {
            require("../templates/construction.php");
        }
        require("../templates/footer.php");
        
    }
    
    
    /**
     * Executes SQL statement, possibly with parameters, returning
     * an array of all rows in result set or false on (non-fatal) error.
     */
    function query(/* $sql [, ... ] */)
    {
        // SQL statement
        $sql = func_get_arg(0);

        // parameters, if any
        $parameters = array_slice(func_get_args(), 1);

        // try to connect to database
        static $handle;
        if (!isset($handle))
        {
            try
            {
                // connect to database
                $handle = new PDO("mysql:dbname=" . DATABASE . ";host=" . SERVER, USERNAME, PASSWORD);

                // ensure that PDO::prepare returns false when passed invalid SQL
                $handle->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); 
            }
            catch (Exception $e)
            {
                // trigger (big, orange) error
                trigger_error($e->getMessage(), E_USER_ERROR);
                exit;
            }
        }

        // prepare SQL statement
        $statement = $handle->prepare($sql);
        if ($statement === false)
        {
            // trigger (big, orange) error
            trigger_error($handle->errorInfo()[2], E_USER_ERROR);
            exit;
        }

        // execute SQL statement
        $results = $statement->execute($parameters);

        // return result set's rows, if any
        if ($results !== false)
        {
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }
        else
        {
            return false;
        }
    }
?>
