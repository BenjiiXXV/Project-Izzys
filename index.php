<!DOCTYPE html>
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
  <title>Izzy's Epicailty</title>
  <style>
    body  {
        background-image: url("img/heartwelcome.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position-x: center;
        background-position-y: top;   
        background-size: 100%;
        margin-bottom: 0px;
        margin-top: 0px;
         }
         
  </style>
  <body>
    <div class="meny">
      <ul>
        <li><button onclick="Main()" class="button col-sm-4" style="button">FEATURED PRIDE:<br>Greenberg's Experiment</button></li>
        <li>
          <div class="dropdown col-sm-4">
            <button onclick="myFunction()" class="dropbtn">BACKBURNERS:<br>Idle Projects</button>
            <div id="myDropdown" class="dropdown-content">
              <a href="wota.php">WAR OF<br>THE ANGELS</a>
              <a href="gol.php">DRAGON'S<br>LEGACY</a>
            </div>
          </div>
        </li>
        <li>
          <button onclick="Main2()" class="button" style="button col-sm-4">GRAVEYARD:<br>Dead Projects</button>
        </li>
      </ul>
    </div>


    <div>
      <div class="footer col-sm-6">
        <footer>A website dedicated to Izzy's deep dark holes of inspiration.</footer>
      </div>
      <div class="footer2 col-sm-6">
        <footer>LAST POST: Greenberg's Experiment at January 2nd, 2017</footer>
      </div> 
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


    </script>
  </body>

</html>