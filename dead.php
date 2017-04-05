<?php
  require_once("head.php");
  include_once("sidenav.php");
  include_once("commentdata.php");
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
           <?php
            $DB = new DB();
            $Titles = $DB->loadTitles('dead');
           
            foreach($Titles as $Title)
             {
                  $Text = '<li>';
                  $Text .= '<button onclick="loadDoc(\'dead/' . $Title['title'] . '\', false)"';
                  $Text .= 'class="button">' . $Title['title'] . '</button>';
                  $Text .= '</li>';
                  echo $Text;
                }

            ?>
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