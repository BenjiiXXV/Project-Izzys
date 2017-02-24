<?php
  require("head.php");
  include("sidenav.php");
  include("commentdata.php");
?>
<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Fondamento" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/Greenberg.css">
    <title>Greenberg's Experiment</title>
  </head>
  <body class="bloodyeverything">
    <center>
      <div class="col-sm-12">
        <h1>GREENBERG'S EXPERIMENT</h1>
        <h2>A Man's dying is more the survivors' affair than his own. ~Thomas Mann</h2>
        <h4>(Click any chapter name to view the chapter)</h4>
        <div class="GreenbergNav">
          <ul>
            <li><button onclick="loadDoc('ge/', 'The Entree')" class="button">[Chapter One]<br>The Entree</button></li>
            <li><button onclick="loadDoc('ge/', 'The Array')" class="button">[Chapter Two]<br>The Array</button></li>
            <li><button onclick="loadDoc('ge/', 'The Efflorescense')" class="button">[Chapter Three]<br>The Efflorescense</button></li>
            <li><button onclick="loadDoc('ge/', 'The Enmity')" class="button">[Chapter Four]<br>The Enmity</button></li>
          </ul>
        </div>
        
        <p id="entr"></p>
        <p id="bottom"></p>
        <p id="comm"></p>

      
      <br><br><br><br><br><br><hr>
      <footer style="color:darkred;">THIS WEBSITE WOULD NOT HAVE BEEN POSSIBLE WITHOUT THE HELP OF MY FRIENDS AND FAMILY.</footer>
      </center>
     </div>
    
  
  </body>
</html>
