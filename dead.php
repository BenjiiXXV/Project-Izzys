<?php
  require("head.php");
  include("sidenav.php");
  include("commentdata.php");
?>
<html>
  <head>
        <link href="https://fonts.googleapis.com/css?family=Fondamento" rel="stylesheet">
        <title>DEAD PROJECTS</title>
    </head>
  
 
    <body class="bloodyeverything">
      <div class="col-sm-12">
        <center>
          <h1>Shut down projects.</h1>
          <h2>Projects that have been discontinued for any reason.</h2>
          <h4>Please note that due to the state of the projects, 
          they might be riddled with errors and mistakes, as well as timeline discontinuity
          and styling errors. 
          <br>(Click any title to view the chapter)</h4>
          <div class="deadNav">
            <ul>
              <li><button onclick="loadDoc('dead/Mellody', false)" class="button">[CRIME]<br>Mellody Conroy</button></li>
              <li><button onclick="loadDoc('dead/YAAS', false)" class="button">[SURVIVAL]<br>YAAS</button></li>
              <li><button onclick="loadDoc('dead/Equity', false)" class="button">[REV/ROM]<br>Equity</button></li>
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