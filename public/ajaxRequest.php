<?php
    /*
     * ajaxRequest.php public
     * handles a request and returns an answer
     * from the DB
     * by Alex Reyes
     **/

    include("../include/helpers.php");

    $q = intval($_GET['q']);
     
    // check if there are new tweets
    $test = query("SELECT id FROM tweets WHERE id = ?", $q + 1);
    
    // if no return error
    if (empty($test))
    {
        echo 'false';
    }

    // if there are new tweets
    else
    {
        do
        {
            $q++;
            
            // retrieve data
            $data = query("SELECT users.username, users.avatar, tweets.id, tweets.tweet FROM users, tweets WHERE tweets.userId = users.id AND tweets.id = ?", $q); ?>
        
        <?php foreach($data as $row): ?>
            <?php if ($row['id'] == $_SESSION['id']): ?>
                <div class="panel panel-success">
            <?php else: ?>
                <div class="panel panel-info">
            <?php endif ?>
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
            endforeach; 
        } while(!empty($data)); // end do while    
    } // end else
    
?>
