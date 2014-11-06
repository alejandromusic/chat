<?php
    /***
     * index.php
     **/
    
    include("../include/helpers.php");

    // if user sends a tweet
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
        // enter message in database
        $message = query("INSERT INTO tweets (userId, username, tweet) VALUES (?, ?, ?)", $_SESSION["id"], $_SESSION["name"], $_POST["tweet"]);
        
        // upon error, apologize
        if ($message === false)
        {
            apologize("Ooups! I screwed up");
            exit;
        }
    }

    /** load last 30 tweets **/
    
    // get highest tweet
    $maxId = query("SELECT MAX(id) FROM tweets");
    
    // convert array in variable
    $maxId = $maxId[0]["MAX(id)"];
    
    // get last 30 tweets
    $data = query("SELECT users.username, users.avatar, tweets.id, tweets.tweet FROM users, tweets WHERE tweets.userId = users.id AND tweets.id > ? ORDER BY tweets.id DESC", $maxId - 30);
    
    $users = query("SELECT DISTINCT users.username FROM users");

    // use chat template for form
    render(["chat"], ["data" => $data, "users" => $users]);
    exit;
       
?>
