<?php
    /*
     * ajax.php public
     * inserts tweet in DB
     * from the DB
     * by Alex Reyes
     **/

    include("../include/helpers.php");

    $t = $_GET['t'];
     
    // check if there is a valid session open
    if (!isset($_SESSION['id']))
    {
        echo 'false';
    }
    
    // insert tweet in db
    $test = query("INSERT INTO tweets (userId, tweet) VALUES (?, ?)", $_SESSION['id'], $t);
    
    // if error
    if ($test === false)
    {
        echo 'false';
    }
    // if able to input in database
    else
    {   // get highest tweet (presumably the one we just entered)
        $maxId = query("SELECT MAX(id) FROM tweets");
    
        // convert array in variable
        $maxId = $maxId[0]["MAX(id)"];
        
        // get tweet's info from the database
        $dat = query("SELECT users.username, users.avatar, tweets.id, tweets.tweet FROM users, tweets WHERE tweets.userId = users.id AND tweets.id = ?", $maxId);
        $row = $dat[0];
        // add node
        ?>
                <div class="panel panel-success">
          
                    <div class="panel-heading">
                        <input type="hidden" class="idC" value="<?= $row['id'] ?>" />
                        <h3 class="panel-title">
                            <img src="img/avatars/<?= htmlspecialchars($row['avatar']) ?>" width="40px" height="40px" />
                            <?= htmlspecialchars($row["username"]) ?>
                        </h3>
                    </div>
            
                    <div class="panel-body">    
                        <?= htmlspecialchars($row["tweet"]) ?>
                    </div>
            
                </div><!-- end of panel-->
        <?php
        
    } // end else
    
?>
