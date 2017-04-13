<?php 
include_once("db.php");
  include_once("login.php");
  session_start ();
?>

<html>
<body>
    <nav class="meny navbar-toggleable-md navbar navbar-right" style="height:200px;">
        <div class="container-fluid">
            <!-- Collect the nav links, forms, and other content for toggling -->
           
                <ul class="nav navbar-nav" stlyle="background-color: rgba(255, 0, 0, 0.4);">
                    <li><a href="Greenberg.php" class="button" style="button">FEATURED PRIDE:<br>Greenberg's Experiment</a></li>
                    <li class="dropdown">
                        <a href="#" class="button dropdown-toggle" data-toggle="dropdown" role="button">BACKBURNERS<br>Other Projects</a>
                        <ul class="dropdown-menu" style="background-color: black;">
                            <li><a href="wota.php" class="button"  style="height: 50px;">WAR OF<br>THE ANGELS</a></li>
                            <li><a href="gol.php" class="button"  style="height: 50px;">GANGS<br>OF LETUM</a></li>  
                        </ul>
                    </li>
                    <li><a href="dead.php" class="button" style="button">GRAVEYARD:<br>Dead Projects</a></li>
                    <li><button onclick="login()" class="button" style="button" id="mebutton"></button></li>
                    <li><button onclick="register()" class="button" style="button" id="me2button"></button></li>
                </ul>
           
        </div><!-- /.container-fluid -->
    </nav>
</body>

<?php if (isset($_SESSION['user'])) {
   echo '<script>
    document.getElementById("mebutton").innerHTML = "MY<br>PROFILE";
    document.getElementById("me2button").innerHTML = "LOG<br>OUT";
    </script>';
    function login(){
           header("location: profile.php");
          }
          function register(){
          session_destroy();
          header("Refresh:3");
          }
}
if (!isset($_SESSION['user'])) {
    echo '<script>
   document.getElementById("mebutton").innerHTML = "SIGN<br>UP";
              function login(){
                          $("#registrymodal").modal();
                      
              }
            document.getElementById("me2button").innerHTML = "LOG<br>IN";
                function register(){
                          $("#loginmodal").modal();

                }
</script>';
}

?>