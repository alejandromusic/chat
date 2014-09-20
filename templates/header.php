<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/styles.css" rel="stylesheet"/>
    <script src="js/news.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    
    <?php if (isset($title)): ?>
        <title>Welcome: <?= ($title) ?></title>
    <?php else: ?>
        <title>Welcome to school</title>
    <?php endif ?>
</head>
<body>
    <div id="nav">
        <a href="index.php">Home</a>
        <a href="http://alejandromusic.org" target="_new">Map</a>
        <a href="tutoring.php">Tutoring</a>
        <a href="http://alejandromusic.org/orientation" target="_new">Training</a>
        <a href="help.php">Help</a>
    </div>   
    
    <div id="middle">
