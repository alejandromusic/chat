<?php
    /*****
     * register.php
     * by Alex Reyes
     * Allows a user to register in db
     */
    
    include("../include/helpers.php");

     // check if form has been submitted
     if ($_SERVER["REQUEST_METHOD"] == "POST")
     {
        // sanitize input
        $username = strtolower($_POST["username"]);
        $password = ($_POST["password"]);
        $confirm =  ($_POST["confirm"]);
        
        // if fields are empty, submit error
        if (empty($username) || empty($password))
        {
            apologize("You need to enter all of the fields");
            exit;
        }

        // check if the password and confirmation match
        if ($password !== $confirm)
        {
            apologize("The passwords did not match");
            exit;
        }
        
        // else register user
        else
        {
            // insert data in db
            $ins = query("INSERT INTO users (username, password) VALUES (?, ?)", strtolower($_POST["username"]), $_POST["password"]);

            // check if successful
            if ($ins === false)
            {
                apologize("Couldn't input into database. Try with a different username");
            }
            
            // if successful, access chat
            else
            {
                // get user id and remember it
                $get = query("SELECT id FROM users WHERE username = ?", $_POST["username"]);
                
                if ($get === false)
                {
                    apologize("an alet-error occurred :O");
                    exit;
                }
                
                // first and only row
                $row = $get[0];
                
                // remember user id and name
                $_SESSION["id"] = $row["id"];
                $_SESSION["name"] = strtolower($_POST["username"]);

                // go to main page
                redirect("index.php");
            }
        }


     }
    
     // if form has not been submitted, render form
     else
     {
        render(["registerForm"], ["title" => "Registration"]);
     }
