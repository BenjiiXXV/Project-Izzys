<?php
  require_once("head.php");
  include_once("sidenav.php");
  include_once("commentdata.php");
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
            <?php
            $DB = new DB();
            $Titles = $DB->loadTitles('wota');
            $i = 1;
            foreach($Titles as $Title)
             {
                  $Text = '<li>';
                  $Text .= '<button onclick="loadDoc(\'wota/' . $Title['title'] . '\', false)"';
                  $Text .= 'class="button">[WotA] <br>[Part ' . $i++ . ']</button>';
                  $Text .= '</li>';
                  echo $Text;   
                }

            ?>
      
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