<?php
session_start();
  require_once("head.php");
  include_once("sidenav.php");
  include_once("commentdata.php");
  include_once("db.php");
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
            <?php
            $DB = new DB();
            $Titles = $DB->loadTitles('gb');
            $i = 1;
            foreach($Titles as $Title)
             {
                  $Text = '<li>';
                  $Text .= '<button onclick="loadDoc(\'ge/' . $Title['title'] . '\', false)"';
                  $Text .= 'class="button">[Chapter ' . $i++ . ']<br>' . $Title['title'] . '</button>';
                  $Text .= '</li>';
                  echo $Text;
                }

            ?>
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
