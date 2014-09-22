<?php
    /**
     * change.php 
     * /public controller
     * by Alex Reyes
     * changes the picture file of a user
     **/

    include("../include/helpers.php");
    
    // if a file was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
    
        // In PHP versions earlier than 4.1.0, $HTTP_POST_FILES should be used instead
        // of $_FILES.

        $uploaddir = './img/avatars/';//<----This is all I changed
        $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

        echo '<pre>';
        if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) 
        {
            // relate the file with user
            $pic = query("UPDATE users SET avatar = ? WHERE id = ?", $_FILES['userfile']['name'], $_SESSION["id"]);
            chmod("$uploadfile", 0744);
            // check for error
            if ($pic === false)
            {
                apologize("problem entering in Database");
            }

            // go to homepage
            redirect("index.php");
        } 
        else 
        {
            apologize("An error occurred! maybe the file is too big D:");
        }

        echo 'Here is some more debugging info:';
        print_r($_FILES);

        print "</pre>";

        
    }

    // if no file has been submitted
    else
    {
        render(["upload"]);
    }
?>
