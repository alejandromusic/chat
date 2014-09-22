<?php
    /***
    * upload.php template
    * by Alex Reyes
    **/
?>

<h2>Change profile picture</h2>

<!-- based on php official documentation-->
<!-- The data encoding type, enctype, MUST be specified as below -->
<form enctype="multipart/form-data" action="change.php" method="POST">

    <!-- MAX_FILE_SIZE must precede the file input field -->
    <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
    
    <!-- Name of input element determines name in $_FILES array -->
    Send this file: <input name="userfile" type="file" />
    <input type="submit" value="Send File" />

</form>


