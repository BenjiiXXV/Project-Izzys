
<?php include("login.php"); ?>
<html>
  
  <head>
    <!--<link rel="stylesheet" type="text/css" href="style.css">-->
    <link rel="icon" type="image/png" href="img/icon.png">
    <link href="bootjq/font-awesome.min.css" rel="stylesheet">
    <link href="bootjq/bootstrap-4.0.0-alpha.6-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <script src="bootjq/jquery-3.1.1.min.js"></script>
    <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
    <script src="https://npmcdn.com/bootstrap@4.0.0-alpha.6/dist/js/bootstrap.min.js"></script>
    <script src="bootjq/bootstrap.min.js"></script>
</head>
    <div class="meny pull-right">
      <ul>
        <li><button onclick="Main()" class="button" style="button">FEATURED PRIDE:<br>Greenberg's Experiment</button></li>
        <li>
                                            
            <div class="dropdown">
              <button class="button dropdown-toggle" type="button" data-toggle="dropdown">BACKBURNERS<br>Idle Projects</button>
              <ul class="dropdown-menu">
                <li><a href="wota.php">WAR OF<br>THE ANGELS</a></li>
                <li><a href="gol.php">DRAGON'S<br>LEGACY</a></li>
              </ul>
              </div>
          </div>
        
        </li>
        <li>
          <button onclick="Main2()" class="button" style="button">GRAVEYARD:<br>Dead Projects</button>
        </li>
        <li>
          <button onclick="me()" class="button" style="button" id="mebutton"></button>
        </li>
      </ul>
    </div>

 <script>
      //toggle hide/show dropdown button
      function myFunction() {
          document.getElementById("myDropdown").classList.toggle("show");
      }

      //close the dropdown menu if the user clicks outside of it
      window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
          var dropdowns = document.getElementsByClassName("dropdown-content");
          var i;
          for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
              openDropdown.classList.remove('show');
            }
          }
        }
      }

       function Main(){
        window.location.href = "Greenberg.php";
      }
      function Main2(){
        window.location.href = "dead.php";
      }
      
        //if (user is logged on){
         /* document.getElementById("mebutton").innerHTML = "ME, MYSELF AND I<br>your profile page";
          function me(){
            window.location.href = "profile.php";
          }
        
        } else {*/
              document.getElementById("mebutton").innerHTML = "LOG<br>IN";
              function me(){
                      $(document).ready(function(){
                        $("#mebutton").click(function(){
                          $("#myModal").modal();
                        });
                      });
                
          }

        
 /* <h2>Log in</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" id="myBtn">Login</button>*/

    </script>
    