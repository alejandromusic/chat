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
                    <img src="img/avatars/<?= htmlspecialchars($row['avatar']) ?>" width="40px" height="40px" />
                </td>
                <td> <strong><?= htmlspecialchars($row["username"]) ?></strong> </td>
                <td><?= htmlspecialchars($row["tweet"]) ?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>


    <div id="here">
    </div>


</div> <!-- end of chat#div -->
<div>
    <form action="index.php" method="post" onsubmit="tweet(); return false;">
        <input name="tweet" placeholder="type here..." size="35" autofocus />
        <input type="submit" value="send" />
    </form>
</div>

<div id="options">
    <a href="change.php">Change avatar</a>
    <a href="logout.php">Log out</a>
</div>


<!-- ajax script -->
<script src="js/ajaxChat.js"></script>
<script>
    var chatDiv = document.getElementById('chat');
    chat.scrollTop = chat.scrollHeight;
</script>
