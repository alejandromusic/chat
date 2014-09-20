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
                <td><?= $row["username"] ?> says... </td>
                <td><?= $row["tweet"] ?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>

</div>

<div>
    <form action="index.php" method="post">
        <input type="text" name="tweet" placeholder="type here..." autofocus />
        <input type="submit" value="send" />
    </form>
</div>
<a href="logout.php">Log out</a>
