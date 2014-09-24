<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- from bootstrap template -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <!-- from alex -->
    <link href="/css/styles.css" rel="stylesheet"/>
    <link href="/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="/css/bootstrap-theme.min.css" rel="stylesheet"/>
    <!--news <script src="js/news.js" type="text/javascript"></script>-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    
    <?php if (isset($title)): ?>
        <title>Welcome: <?= ($title) ?></title>
    <?php else: ?>
        <title>Welcome to school</title>
    <?php endif ?>
    
    <!-- from bootstrap -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

<body role="document">
    
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Main Page</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="http://alejandromusic.org/map.php" target="_new">Map</a></li>
            <li><a href="http://alejandromusic.org/orientation" target="_new">Tutorials</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">More <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="tutoring.php">Tutoring</a></li>
                <li><a href="help.php">Find Help</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    
    <div id="middle">
