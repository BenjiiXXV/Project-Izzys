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
    <nav class="meny navbar-toggleable-md navbar navbar-right">
        <div class="container-fluid">
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="Greenberg.php" class="button" style="button">FEATURED PRIDE:<br>Greenberg's Experiment</a></li>
                    <li class="dropdown">
                        <a href="#" class="button dropdown-toggle" data-toggle="dropdown" role="button">BACKBURNERS<br>Idle Projects</a>
                        <ul class="dropdown-menu">
                            <li><a href="wota.php">WAR OF<br>THE ANGELS</a></li>
                            <li><a href="gol.php">DRAGON'S<br>LEGACY</a></li>  
                        </ul>
                    </li>
                    <li><a href="dead.php" class="button" style="button">GRAVEYARD:<br>Dead Projects</a></li>
                    <li><button onclick="login()" class="button" style="button" id="mebutton"></button></li>
                    <li><button onclick="register()" class="button" style="button" id="me2button"></button></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</body>

<script>
 //if (user is logged on){
         /* document.getElementById("mebutton").innerHTML = "MY<br>PROFILE";
            document.getElementById("me2button").innerHTML = "LOG<br>OUT";
          function me(){
            window.location.href = "profile.php";
          }
        
        } else {*/
            document.getElementById("mebutton").innerHTML = "SIGN<br>UP";
              function login(){
                      $(document).ready(function(){
                        $("#mebutton").click(function(){
                          $("#registrymodal").modal();
                        });
                      });
              }
            document.getElementById("me2button").innerHTML = "LOG<br>IN";
                function register(){
                      $(document).ready(function(){
                        $("#me2button").click(function(){
                          $("#loginmodal").modal();
                        });
                      });
                
                }
    //}
              
</script>