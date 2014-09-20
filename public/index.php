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

    $data = query("SELECT users.username, users.avatar, tweets.tweet FROM users, tweets WHERE tweets.userId = users.id");
    render(["chat"], ["data" => $data]);
    
    
    exit;
       

?>
