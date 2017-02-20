<?php include("login.php"); ?>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/png" href="img/icon.png">
    <link href="bootjq/font-awesome.min.css" rel="stylesheet">
    <link href="bootjq/bootstrap-4.0.0-alpha.6-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <script src="bootjq/jquery-3.1.1.min.js"></script>
    <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
    <script src="https://npmcdn.com/bootstrap@4.0.0-alpha.6/dist/js/bootstrap.min.js"></script>
    <script src="bootjq/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
<body>
    <nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            
            <li><a href="Greenberg.php" class="button" style="button">FEATURED PRIDE:<br>Greenberg's Experiment</a></li>
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
            <ul class="button dropdown-menu" style="button">
                <li><a href="wota.php">WAR OF<br>THE ANGELS</a></li>
                <li><a href="gol.php">DRAGON'S<br>LEGACY</a></li>  
            </ul>
            </li>
            <li><a href="dead.php" class="button" style="button">GRAVEYARD:<br>Dead Projects</a></li>
            <li><button onclick="me()" class="button" style="button" id="mebutton"></button></li>
        </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
    </nav>
</body>