<?php
    /**
     * chat.php template
     **/
?>

<p>Welcome <?= $_SESSION["name"] ?></p>

<div id="chat">

    <table>
        <tbody>

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
        </tbody>
    </table>

</div>

<div id="here">
</div>

<div>
    <form action="index.php" method="post">
        <input type="text" name="tweet" placeholder="type here..." autofocus />
        <input type="submit" value="send" />
    </form>
</div>

<a href="change.php">Change avatar</a>
<a href="logout.php">Log out</a>

<!-- ajax script -->
<script src="js/ajaxChat.js"></script>

