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
    
    // if so return error
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
        
        <table>

        <?php foreach($data as $row): ?>
            <tr>
                <td>
                    <input type="hidden" class="idC" value="<?= $row['id'] ?>" />
                    <img src="img/avatars/<?= htmlspecialchars($row['avatar']) ?>" width="40px" height="40px" />
                </td>
                <td> <strong><?= htmlspecialchars($row["username"]) ?></strong> </td>
                <td><?= htmlspecialchars($row["tweet"]) ?></td>
            </tr>
        <?php endforeach ?>

        </table>
    
    <?php
        } while(!empty($data));    
    }
    
?>
