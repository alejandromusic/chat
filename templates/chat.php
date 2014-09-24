<?php
    /**
     * chat.php template
     **/
?>

<div class="page-header">
    <h1>Welcome <?= $_SESSION["name"] ?></h1>
</div>

<div class="row">
    <div class="col-sm-4">
        <div id="chat" class="well">

            <?php foreach($data as $row): ?>
                <?php if (strcmp($row['username'], $_SESSION['name']) === 0): ?>
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
                        <?= htmlspecialchars($row["tweet"]) ?></td>
                    </div>
            
                </div><!-- end of panel-->
            <?php endforeach ?>


            <div id="here">
            </div>
        
        </div> <!-- end chat div-->

    <div>
        <form action="index.php" method="post" onsubmit="tweet(); return false;">
            <input name="tweet" placeholder="type here..." size="35" autofocus />
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>

</div><!-- end row -->

<div id="options">
    <a href="change.php">Change avatar</a><br/>
    <a href="logout.php">Log out</a>
</div>


<!-- ajax script -->
<script src="js/ajaxChat.js"></script>
<script>
    // scroll to last message
    var chat = document.getElementById('chat');
    chat.scrollTop = chat.scrollHeight;
</script>
