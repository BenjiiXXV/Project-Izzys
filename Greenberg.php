<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <?php require("includes/head.php"); ?>
        <link href="https://fonts.googleapis.com/css?family=Fondamento" rel="stylesheet">
        <link href="css/greenberg.css" rel="stylesheet" type="text/css" />
        <title>Greenberg's Experiment</title>
    </head>
    <body class="bloodyeverything">
      <div class="container-fluid">
        <?php require("navigation.php") ?>
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            Change the font color of the story to improve readability:<br>
            <button onclick="changeFont('#F3D42A')" class="butt">YELLOW FONT</button>
            <button onclick="changeFont('red')" class="butti">RED FONT</button>
        </div>
      </div>
      <div class="header">
        <h1>GREENBERG'S EXPERIMENT</h1>
        <h2>A Man's dying is more the survivors' affair than his own. ~Thomas Mann</h2>
        <h4>(Click any chapter name to view the chapter)</h4>
      </div>
      <div class="row">
        <ul>
          <li><button onclick="loadDoc('The Entree')" class="button">[Chapter One]<br>The Entree</button></li>
          <li><button onclick="loadDoc('The Array')" class="button">[Chapter Two]<br>The Array</button></li>
          <li><button onclick="loadDoc('The Efflorescense')" class="button">[Chapter Three]<br>The Efflorescense</button></li>
          <li><button onclick="loadDoc('The Enmity')" class="button">[Chapter Four]<br>The Enmity</button></li>
          <li>
            <div class="dropdown">
              <button onclick="myFunction()" class="dropbtn">[Chapter X]<br>The Beta Post</button>
              <div id="myDropdown" class="dropdown-content">
              <a>No Beta content available.</a>
            </div></li>
          <li><button onclick="Main()" class="button" style="button">[Back]<br>To Main Page</button></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div id="storyArea">
             <p id="entr"></p>
            </div>
        </div>
      </div>
      <p id="comm"></p>
      <div class="footer">
          THIS WEBSITE WOULD NOT HAVE BEEN POSSIBLE WITHOUT THE HELP OF MY FRIENDS AND FAMILY.
      </div>
              <script src="js/greenberg.js" />
    <?php include("commentdata.php"); ?>
    </body>
</html>