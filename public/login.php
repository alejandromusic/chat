<?php
    /**
     * login.php
     * controller by Alex Reyes
     **/
    
    // configuration
    require("../include/helpers.php"); 

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["username"]))
        {
            apologize("You must provide your username.");
            exit;
        }
        else if (empty($_POST["password"]))
        {
            apologize("You must provide your password.");
            exit;
        }

        // query database for user
        $rows = query("SELECT * FROM users WHERE username = ?", $_POST["username"]);

        // if we found user, check password
        if (count($rows) == 1)
        {
            // first (and only) row
            $row = $rows[0];

            // compare hash of user's input against hash that's in database
            if (($_POST["password"]) == $row["password"])
            {
                // remember that user's now logged in by storing user's ID in session
                $_SESSION["id"] = $row["id"];
                
                // let's remember his username as well
                $_SESSION["name"] = $row["username"];

                // redirect
                redirect("index.php");
            }
        }

        // else apologize
        apologize("Invalid username and/or password.");
    }
    else
    {
        // else render form
        render(["login"], ["title" => "Log In"]);
    }
