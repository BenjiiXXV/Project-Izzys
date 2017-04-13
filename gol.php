<?php
session_start();
  require_once("head.php");
  include_once("sidenav.php");
  include_once("commentdata.php");
?>
<html>
  <head>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative|Covered+By+Your+Grace|Merriweather" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/gol.css" />
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
            <div class="golNav">
              <ul>
                <li>
                <div class="dropdown">
                  <button onclick="lore()" class="dropbtn">[EPIC LORE]<br>Background intel</button>
                  <div id="myDropdown" class="dropdown-content" style="z-index:10; width:137px;" >
                    <button class="button" onclick="loadDoc('gol/History Letum', false)">HISTORY OF LETUM</button>
                    <button class="button" onclick="loadDoc('gol/Gang Intel', false)">GANG INFORMATION</button>
                    <button class="button" onclick="loadDoc('gol/GoL Downloads', false)">MISC. DOWNLOADS</button>
                  </div>
                </div>
                </li>
                <li>
                  <div class="dropdown">
                    <button onclick="Bankers()" class="dropbtn">[CHRONICLES]<br>Tom Bankers</button>
                    <div id="dropBankers" class="dropdown-content"  style="z-index:10; width:137px;">
                        <?php
                        $DB = new DB();
                        $Titles = $DB->loadTitles('tb');
                        $i = 1;
                        foreach($Titles as $Title)
                        {   
                              $Text = '<button onclick="loadDoc(\'gol/' . $Title['title'] . '\', false)"';
                              $Text .= 'class="button" style="width:68px;">ACT<br>[' . $i++ . ']</button>';
                              echo $Text;
                            }
                        ?>
                  </div>
                </div>
                </li>
                <li>
                  <div class="dropdown">
                    <button onclick="Legacy()" class="dropbtn">[CHRONICLES]<br>Dragon's Legacy</button>
                    <div id="dropLegacy" class="dropdown-content" style="z-index:10; width:137px;">
                      <?php
                        $DB = new DB();
                        $Titles = $DB->loadTitles('dl');
                        $i = 1;
                        foreach($Titles as $Title)
                        {   
                              $Text = '<button onclick="loadDoc(\'gol/' . $Title['title'] . '\', false)"';
                              $Text .= 'class="button" style="width:68px;">ACT<br>[' . $i++ . ']</button>';
                              echo $Text;
                            }
                        ?>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <p id="entr"></p>
            <p id="bottom"></p>
            <p id="comm" class="comm"></p>
            <br><br><br><br><br><br><hr>
            <footer style="color:darkred;">THIS WEBSITE WOULD NOT HAVE BEEN POSSIBLE WITHOUT THE HELP OF MY FRIENDS AND FAMILY.</footer>
        </center>
    </div>
<script>
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