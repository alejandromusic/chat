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
    <script src="/css/jquery-1.11.1.min.js"></script>
    
    <?php if (isset($title)): ?>
        <title><?= ($title) ?></title>
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
          <a class="navbar-brand" href="/">Main Page</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <?= $active[0] ?><a href="index.php">Home</a></li>
            <?= $active[1] ?><a href="edplan.php">Ed Planner</a></li>
            <?= $active[2] ?><a href="http://alejandromusic.org/map.php" target="_blank">Map</a></li>
            <?= $active[3] ?><a href="http://alejandromusic.org/orientation" target="_blank">Tutorials</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">More <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="webgl.php">3D Objects</a></li>
                <li><a href="webgl2.php">3D Transmission</a></li>
                <li><a href="cgi.php">Context/Projections</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    
    <div id="middle">
