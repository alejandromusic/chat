<?php
    /**
     * ajax.php public
     * makes an ahax request to ajaxRequest.php
     * By Alex Reyes
     **/

    require("../include/helpers.php");
    $data = query("SELECT users.username, users.avatar, tweets.id, tweets.tweet FROM users, tweets WHERE tweets.userId = users.id");

    if ($data === false)
    {
        apologize("Error accessing database");
        exit;
    }
?>
<!DOCTYPE html>
<html>
<head>
<script>

function request(a) {
    // make ajax request
    xmlhttp = new XMLHttpRequest();
    
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            if (xmlhttp.responseText == "false")
            {
                //alert("empty");
            }
            else
            {
                document.getElementById("here").innerHTML = document.getElementById("here").innerHTML + xmlhttp.responseText;
                //alert("q is " + a + " return is "+xmlhttp.responseText);
            }
            setTimeout(function(){time()}, 3000);
        }
    }
    xmlhttp.open("GET", "ajaxRequest.php?q=" + a, true);
    xmlhttp.send();
}


function time() {
    // get value of last id on page from the idC class
    tweets = document.getElementsByClassName("idC");
    y = tweets.length;

    request(tweets[y - 1].value);
}

</script>

</head>
<body onload="time()">
        <table border='1'>
        <?php foreach ($data as $row): ?>
            <tr>
                <td>
                    <input type="hidden" class="idC" value="<?= $row['id'] ?>" />
                    <img src="img/avatars/<?= htmlspecialchars($row['avatar']) ?>" width="20px" height="20px" /></td>
                <td> <strong><?= htmlspecialchars($row["username"]) ?></strong> </td>
                <td><?= htmlspecialchars($row["tweet"]) ?> </td>                                                    </tr>

        <?php endforeach ?>
        </table>

        <div id="here"></div>
</body>
</html>
