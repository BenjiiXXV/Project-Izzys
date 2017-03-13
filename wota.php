<?php
  require("head.php");
  include("sidenav.php");
  include("commentdata.php");
?>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Fondamento|Fredericka+the+Great|Indie+Flower|Rochester" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/wota.css">
        <title>WAR OF THE ANGELS</title>
    </head>
    <body class="bloodyeverything" id="top">
    <div class="container col-sm-12">
    <center>
        <h3 class="rhs">If I would just tell you my side, you would never understand.</h3>
        <h3 class="lhs">No, I have to tell you everything.</h3>
        <h1 class="headline">WAR OF THE ANGELS</h1>
        <h2 class="wotasub">
                ~In honor of the real angels, unknown and unloved.~<br>	 		 	 
                ~In honor of the hidden heroes of our terrible world.~<br>				
                ~But above all else,~<br>					
                ~In honor of you.~		
                </h2>
        <h4>(Click any part to explore it)</h4>
        <div class="wota-nav">
          <ul>
          <li><button onclick="loadDoc('wota/WotA part one', false)" class="button">[WotA]<br>Part One</button></li>
          <li><button onclick="loadDoc('wota/WotA part two', false)" class="button">[WotA]<br>Part Two</button></li>
          <li><button onclick="loadDoc('wota/WotA part three', false)" class="button">[WotA]<br>Part Three</button></li>
          <li><button onclick="loadDoc('wota/WotA part four', false)" class="button">[WotA]<br>Part four</button></li>
          </ul>
        </div>
        
        <p id="entr" style="font-size: 17px;"></p>
        <p id="bottom"></p>
        <p id="comm"></p>
        <br><br><br><br><br><br><hr>
        <footer  style="color:darkred;">THIS WEBSITE WOULD NOT HAVE BEEN POSSIBLE WITHOUT THE HELP OF MY FRIENDS AND FAMILY.</footer>
    </center>
    </div>
    </body>
</html>