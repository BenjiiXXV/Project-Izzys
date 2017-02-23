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
              <li><button onclick="loadDoc('Mellody')" class="button">[CRIME]<br>Mellody Conroy</button></li>
              <li><button onclick="loadDoc('YAAS')" class="button">[SURVIVAL]<br>YAAS</button></li>
              <li><button onclick="loadDoc('Equity')" class="button">[REV/ROM]<br>Equity</button></li>
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
                xhttp.open("POST", "dead/"+fileName+".php", true);
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