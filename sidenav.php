<?php 
  require("head.php");
  include("login.php"); 
?>

<html>
<head>
</head>
<body>
    <nav class="meny navbar-toggleable-md navbar navbar-right">
        <div class="container-fluid">
            <!-- Collect the nav links, forms, and other content for toggling -->
           
                <ul class="nav navbar-nav">
                    <li><a href="index.php" class="button" style="button">BACK<br>to HOME</a></li>
                    <li><button onclick="login()" class="button" style="button" id="mebutton"></button></li>
                    <li><button onclick="register()" class="button" style="button" id="me2button"></button></li>
                </ul>
           
        </div><!-- /.container-fluid -->
    </nav>
</body>

<script>

         /* if (user is logged on{
             document.getElementById("mebutton").innerHTML = "MY<br>PROFILE";
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
