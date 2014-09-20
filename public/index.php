<?php
    /***
     * index.php
     **/
    
    include("../include/helpers.php");

    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $message = query("INSERT INTO tweets (userId, username, tweet) VALUES (?, ?, ?)", $_SESSION["id"], $_SESSION["name"], $_POST["tweet"]);
        if ($message === false)
        {
            apologize("Ooups! I screwed up");
            exit;
        }
    }

    $data = query("SELECT * FROM tweets");
    render(["chat"], ["data" => $data]);
    
    
    exit;
       

?>
