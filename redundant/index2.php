<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="icon" 
          type="image/png" 
          href="img/icon.png">
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
  <ul>
    <li><button onclick="Main()" class="button" style="button">FEATURED PRIDE:<br>Greenberg's Experiment</button></li>
    <li>
      <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn">BACKBURNERS:<br>Idle Projects</button>
        <div id="myDropdown" class="dropdown-content">
          <a href="wota.php">WAR OF<br>THE ANGELS</a>
          <a href="gol.php">DRAGON'S<br>LEGACY</a>

        </div>
     </div></li>
     <li><button onclick="Main2()" class="button" style="button">GRAVEYARD:<br>Dead Projects</button></li>
    </ul>
    <p class="footer"style="text-align:left;">A website dedicated to Izzy's deep dark holes of inspiration.<br>
    Last post: <br>
    Gangs of Letum - Dragon's Legacy at Novemeber 24th 2016</p> 

    
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