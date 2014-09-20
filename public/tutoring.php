<?php
    session_start();
    include("../include/helpers.php");
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["email"]))
        {
            apologize("You must provide an email");
        }
        else if (empty($_POST["password"]))
        {
            apologize("You must provide your password.");
        }
    }
    
    else
    {
        render(["tutoring_form"], ["title" => "tutoring"]);
    } 
?>
