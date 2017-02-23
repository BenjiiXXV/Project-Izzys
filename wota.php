<?php
  require("head.php");
  include("sidenav.php");
  include("commentdata.php");
?>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Fondamento|Fredericka+the+Great|Indie+Flower|Rochester" rel="stylesheet">
        <title>WAR OF THE ANGELS</title>
    </head>
    <body class="bloodyeverything" id="top">
    <div class="container col-sm-12">
    <center>
        <h3 class="rhs">If I would just tell you my side, you would never understand.</h3>
        <h3 class="lhs">No, I have to tell you everything.</h3>
        <h1 style="font-family: 'Fredericka the Great', cursive; margin-top: 0px;">WAR OF THE ANGELS</h1>
        <h2 class="wotasub">
                ~In honor of the real angels, unknown and unloved.~<br>	 		 	 
                ~In honor of the hidden heroes of our terrible world.~<br>				
                ~But above all else,~<br>					
                ~In honor of you.~		
                </h2>
        <h4>(Click any part to explore it)</h4>
        <div class="wota-nav">
          <ul>
          <li><button onclick="loadDoc('WotA part one')" class="button">[WotA]<br>Part One</button></li>
          <li><button onclick="loadDoc('WotA part two')" class="button">[WotA]<br>Part Two</button></li>
          <li><button onclick="loadDoc('WotA part three')" class="button">[WotA]<br>Part Three</button></li>
          <li><button onclick="loadDoc('WotA part four')" class="button">[WotA]<br>Part four</button></li>
          </ul>
        </div>
        
        <p id="entr" style="font-size: 17px;"></p>
        <p id="bottom"></p>
        <p id="comm"></p>
        <br><br><br><br><br><br><hr>
        <footer  style="color:darkred;">THIS WEBSITE WOULD NOT HAVE BEEN POSSIBLE WITHOUT THE HELP OF MY FRIENDS AND FAMILY.</footer>
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
              xhttp.open("POST", "wota/"+fileName+".php", true);
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