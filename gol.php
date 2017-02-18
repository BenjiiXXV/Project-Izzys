<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Covered+By+Your+Grace" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400i" rel="stylesheet">
        <link rel="icon" 
          type="image/png" 
          href="img/icon.png">
        <script src="jquery-3.1.1.min.js" type="text/javascript"> </script> </script>
        <title>WAR OF THE ANGELS</title>
    </head>
    <center>
      <table style="border: solid 1px red;">
        <tr>
          <th>
            Change the font color of the story to improve readability:<br>
            <button onclick="change()" class="butt">YELLOW FONT</button>
            <button onclick="changeback()" class="butti">RED FONT</button>
          </th>
        </tr>
      </table>
    </center>
    <body class="bloodyeverything">
    <center>
        <h1 style="font-family: 'Cinzel Decorative', cursive; font-size: 100px;">GANGS OF LETUM</h1>
        <h2 style="font-family: 'Covered By Your Grace', cursive;">THE DRAGONS LEGACY</h2>
        <h4 style="width: 48%; left: 26%;">Gangs of Letum was created as an interactive project between Izzy and her readers. 
        To make this possible, there has been put a lot of time and effort into creating characters, gangs
        and the city. I've included most of the prep files under the [LORE] section, but keep in mind that
        other than the history of Letum, the files were intended as information, not entertainment. 
        <br>(Click any part to explore it)</h4>

        <ul>
         <li>
        <div class="dropdown">
          <button onclick="myFunction()" class="dropbtn">[EPIC LORE]<br>Background intel</button>
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
        <li><button onclick="Main()" class="button" style="button">[Back]<br>To Main Page</button></li>
        </ul>
        
        <p id="entr" style="font-family: 'Merriweather', serif;"></p>

        <p id="comm" class="comm"></p>
        <br><br><br><br><br><br><hr>
        <footer>THIS WEBSITE WOULD NOT HAVE BEEN POSSIBLE WITHOUT THE HELP OF MY FRIENDS AND FAMILY.</footer>
    </center>
    <script>
      //Button to homepage function
      function Main(){
        window.location.href = "/index.php";
      }
     
      //loads storychapter segments
      var visible = false;
      var currentChapter;
      function loadDoc(fileName) {
            if (visible == false || currentChapter != fileName) {
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
              visible = false;
              }
      }

      //Dropdown menu
      function myFunction() {
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

      //changes font to yellow if red
      function change(){
          var x = document.getElementsByClassName("bloodyeverything");
              for (i = 0; i < x.length; i++) {
              x[i].style.color= "#F3D42A";
              }
      }

      //changes font to red if yellow
      function changeback(){
        var x = document.getElementsByClassName("bloodyeverything");
              for (i = 0; i < x.length; i++) {
              x[i].style.color= "red";
            
              }
      }

    </script>
    <?php include("commentdata.php"); ?>
    </body>
</html>