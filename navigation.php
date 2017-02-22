<?php //include("login.php"); ?> 
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="<?php  if(basename($_SERVER['SCRIPT_NAME']) == 'Greenberg.php') {echo "active";}?>"><a href="Greenberg.php" class="button" >FEATURED PRIDE:<br />Greenberg's Experiment</a></li>
                <li class="dropdown">
                    <a href="#" class="button dropdown-toggle" data-toggle="dropdown" role="button">BACKBURNERS<br />Idle Projects</a>
                    <ul class="dropdown-menu">
                        <li class="<?php  if(basename($_SERVER['SCRIPT_NAME']) == 'wota.php') {echo "active";}?>"><a href="wota.php">WAR OF<br />THE ANGELS</a></li>
                        <li class="<?php  if(basename($_SERVER['SCRIPT_NAME']) == 'gol.php') {echo "active";}?>"><a href="gol.php">DRAGON'S<br />LEGACY</a></li>  
                    </ul>
                </li>
                <li class="<?php  if(basename($_SERVER['SCRIPT_NAME']) == 'dead.php') {echo "active";}?>"><a href="dead.php" class="button" >GRAVEYARD:<br />Dead Projects</a></li>
                <li><button onclick="login()" class="button" id="mebutton"></button></li>
                <li><button onclick="register()" class="button" id="me2button"></button></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

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