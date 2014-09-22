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
    if (empty($test))
    {
        echo 'false';
    }
    else
    {
        $data = query("SELECT users.username, users.avatar, tweets.id, tweets.tweet FROM users, tweets WHERE tweets.userId = users.id AND tweets.id = ?", $q + 1); ?>
        
        <table>

        <?php foreach($data as $row): ?>
            <tr>
                <td>
                    <input type="hidden" class="idC" value="<?= $row['id'] ?>" />
                    <img src="img/avatars/<?= htmlspecialchars($row['avatar']) ?>" width="20px" height="20px" />
                </td>
                <td> <strong><?= htmlspecialchars($row["username"]) ?></strong> </td>
                <td><?= htmlspecialchars($row["tweet"]) ?></td>
            </tr>
        <?php endforeach ?>

        </table>
    
    <?php
    }
    
?>
