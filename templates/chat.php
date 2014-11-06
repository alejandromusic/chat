<?php
    /**
     * chat.php template
     * controlled by index.php
     * By Alex Reyes
     **/
?>

<div class="row">
    <div class="col-md-2">
        <h4>Welcome <?= $_SESSION["name"] ?></h4>
        <img src="img/avatars/<?= htmlspecialchars($_SESSION['pic']) ?>" width="200px"  />
        <a href="change.php">Change avatar</a><br/>
        <a href="logout.php">Log out</a>
    </div>

    <div class="col-md-8">

        <div>
            <input id="tex" class="form-control" placeholder="type here..." onkeypress="send(event)" size="35" autofocus />
            <button id="sendB" >Post</button>
        </div>

        <div id="posts">
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
        </div>


    </div><!--end col -->

    <div class="col-md-2">
       <h4>List of participants</h4>
       <table class="table table-hover" id="participants">
        <?php foreach ($users as $row): ?>
            <tr>
                <td><?= $row["username"] ?></td>
            </tr>
        <?php endforeach ?>
        </table>
    </div>

</div><!-- end row -->


<!-- ajax script -->
<script src="js/ajaxChat2.js"></script>

