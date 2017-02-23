<?php
  require("head.php");
  include("sidenav.php");
  include("commentdata.php");
?>
<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Fondamento" rel="stylesheet">
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
            <li><button onclick="loadDoc('The Entree')" class="button">[Chapter One]<br>The Entree</button></li>
            <li><button onclick="loadDoc('The Array')" class="button">[Chapter Two]<br>The Array</button></li>
            <li><button onclick="loadDoc('The Efflorescense')" class="button">[Chapter Three]<br>The Efflorescense</button></li>
            <li><button onclick="loadDoc('The Enmity')" class="button">[Chapter Four]<br>The Enmity</button></li>
          </ul>
        </div>
        
        <p id="entr"></p>
        <p id="bottom"></p>
        <p id="comm"></p>

      
      <br><br><br><br><br><br><hr>
      <footer style="color:darkred;">THIS WEBSITE WOULD NOT HAVE BEEN POSSIBLE WITHOUT THE HELP OF MY FRIENDS AND FAMILY.</footer>
      </center>
     </div>
    
      <script>

        //loads storychapter segments
        var visible = false;
        var currentChapter;
        function loadDoc(fileName) {
              
              if (visible == false || currentChapter != fileName) {
                var xhttp2 = new XMLHttpRequest();
                xhttp2.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var bottommenu = this.responseText;
                      document.getElementById("bottom").innerHTML = bottommenu;
                  }
                };
                xhttp2.open("GET", "bottomnav.php", true);
                xhttp2.send();
                currentChapter = fileName;
                $('#story').val(fileName);
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                  if (this.readyState == 4 && this.status == 200) {
                  var str = this.responseText;
                  str = str.replace(/(?:\r\n|\r|\n)/g, '<br />');
                  str = str.replace(new RegExp("'", 'g'), "&#039;");
                  document.getElementById("entr").innerHTML = decodeURIComponent(str);
                  }
                };
                xhttp.open("POST", "ge/"+fileName+".php", true);
                xhttp.send();
                visible = true;
              } else {
                document.getElementById("entr").innerHTML = "";
                document.getElementById("bottom").innerHTML = "";
                visible = false;
                }
        }

    </script>
  </body>
</html>