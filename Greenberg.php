<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Fondamento" rel="stylesheet">
        <link rel="icon" 
          type="image/png" 
          href="img/icon.png">
        <script src="bootjq/jquery-3.1.1.min.js" type="text/javascript"> </script> </script>
        <title>Greenberg's Experiment</title>
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
      <h1>GREENBERG'S EXPERIMENT</h1>
      <h2>A Man's dying is more the survivors' affair than his own. ~Thomas Mann</h2>
      <h4>(Click any chapter name to view the chapter)</h4>

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
      
      <p id="entr"></p>

      <p id="comm"></p>
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
                document.getElementById("entr").innerHTML = decodeURIComponent(str);
                }
              };
              xhttp.open("POST", "ge/"+fileName+".php", true);
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