<?php
  require("head.php");
  include("sidenav.php");
  include("commentdata.php");
?>
<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative|Covered+By+Your+Grace|Merriweather" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/gol.css">
        <title>GANGS OF LETUM</title>
    </head>
    <body class="bloodyeverything">
      <div class="col-sm-12">
        <center>
            <h1 class="headline">GANGS OF LETUM</h1>
            <h2 class="subtitle">THE DRAGONS LEGACY</h2>
            <h4>Gangs of Letum was created as an interactive project between Izzy and her readers. 
            To make this possible, there has been put a lot of time and effort into creating characters, gangs
            and the city. I've included most of the prep files under the [LORE] section, but keep in mind that
            other than the history of Letum, the files were intended as information, not entertainment. 
            <br>(Click any part to explore it)</h4>

            <ul>
            <li>
            <div class="dropdown">
              <button onclick="lore()" class="dropbtn">[EPIC LORE]<br>Background intel</button>
              <div id="myDropdown" class="dropdown-content">
                <a onclick="loadDoc('History Letum')">HISTORY<br>OF LETUM</a>
                <a onclick="loadDoc('Gang Intel')">GANG<br>INFORMATION</a>
                <a onclick="loadDoc('GoL Downloads')">MISCELLANEOUS<br>DOWNLOADS</a>
              </div>
            </div>
            </li>
            <li><div class="dropdown">
              <button onclick="Bankers()" class="dropbtn">[CHRONICLES]<br>Tom Bankers</button>
              <div id="dropBankers" class="dropdown-content">
              <a onclick="loadDoc('[TB] Act 01')">ACT ONE</a>
              <a onclick="loadDoc('[TB] Act 02')">ACT TWO</a>
              <a onclick="loadDoc('[TB] Act 03')">ACT THREE</a>
              <a onclick="loadDoc('[TB] Act 04')">ACT FOUR</a>
              <a onclick="loadDoc('[TB] Act 05')">ACT FIVE</a>
              <a onclick="loadDoc('[TB] Act 06')">ACT SIX</a>
              <a onclick="loadDoc('[TB] Act 07')">ACT SEVEN</a>
              <a onclick="loadDoc('[TB] Act 08')">ACT EIGHT</a>
              <a onclick="loadDoc('[TB] Act 09')">ACT NINE</a>
              <a onclick="loadDoc('[TB] Act 10')">ACT TEN</a>
              <a onclick="loadDoc('[TB] Act 11')">ACT ELEVEN</a>
              <a onclick="loadDoc('[TB] Act 12')">ACT TWELVE</a>
            </div></div></li>
            <li><div class="dropdown">
              <button onclick="Legacy()" class="dropbtn">[CHRONICLES]<br>Dragon's Legacy</button>
              <div id="dropLegacy" class="dropdown-content">
              <a onclick="loadDoc('[DL] Act 01')">ACT ONE</a>
              <a onclick="loadDoc('[DL] Act 02')">ACT TWO</a>
              <a onclick="loadDoc('[DL] Act 03')">ACT THREE</a>
              <a onclick="loadDoc('[DL] Act 04')">ACT FOUR</a>
              <a onclick="loadDoc('[DL] Act 05')">ACT FIVE</a>
              <a onclick="loadDoc('[DL] Act 06')">ACT SIX</a>
            </div></div></li>
            </ul>
            
            <p id="entr"></p>
            <p id="bottom"></p>
            <p id="comm" class="comm"></p>
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
                  document.getElementById("entr").innerHTML = str;
                  }
                };
                xhttp.open("POST", "gol/"+fileName+".php", true);
                xhttp.send();
                visible = true;
              } else {
                document.getElementById("entr").innerHTML = "";
                document.getElementById("bottom").innerHTML = "";
                visible = false;
                }
        }

      //lore Dropdown menu
      function lore() {
          document.getElementById("myDropdown").classList.toggle("show");
      }
      //Tom Bankers Dropdown menu 
      function Bankers() {
          document.getElementById("dropBankers").classList.toggle("show");
      }
       //Legacy Dropdown menu 
      function Legacy() {
          document.getElementById("dropLegacy").classList.toggle("show");
      }

      // Close the dropdown menu if the user clicks outside of it
      window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {

          var dropdowns = document.getElementsByClassName("dropdown-content");
          var i;
          for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
              openDropdown.classList.remove('show');
            }
          }
        }
      }
      </script>
    </body>
</html>