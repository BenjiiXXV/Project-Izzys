<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Fondamento" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Rochester" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
        <link rel="icon" 
          type="image/png" 
          href="img/icon.png">
        <script src="bootjq/jquery-3.1.1.min.js" type="text/javascript"> </script> 
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

        <ul>
        <li><button onclick="loadDoc('WotA part one')" class="button">[WotA]<br>Part One</button></li>
        <li><button onclick="loadDoc('WotA part two')" class="button">[WotA]<br>Part Two</button></li>
        <li><button onclick="loadDoc('WotA part three')" class="button">[WotA]<br>Part Three</button></li>
        <li><button onclick="loadDoc('WotA part four')" class="button">[WotA]<br>Part four</button></li>

        <li><button onclick="Main()" class="button" style="button">[Back]<br>To Main Page</button></li>
        </ul>
        
        <p id="entr" style="font-size: 17px;"></p>

        <p id="comm"></p>
        <br><br><br><br><br><br><hr>
        <footer>THIS WEBSITE WOULD NOT HAVE BEEN POSSIBLE WITHOUT THE HELP OF MY FRIENDS AND FAMILY.</footer>
    </center>
    <script>

      //loads comment section function
      $(function() {
        loadComment();
      });
      
      //Comment section
      function loadComment(){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
          document.getElementById("comm").innerHTML = this.responseText;
          }
        };
        xhttp.open("POST", "comment.php", true);
        xhttp.send();
      }

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
              xhttp.open("POST", "wota/"+fileName+".php", true);
              xhttp.send();
              visible = true;
            } else {
              document.getElementById("entr").innerHTML = "";
              visible = false;
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
     <?php 
        if (!empty($_POST)) {
          $sender = $_POST['email'];
          $user = $_POST["name"];
          $story = $_POST["story"];
          if($_POST["return"]){
            $checked = $user." received a copy of the comment.";
          } else {
            $checked = $user." did not receive a copy of the comment.";
          };
          $comment = $_POST["comment"];
          $emailaddress = "megan.j.online@gmail.com";
          $subject = "Comment from ".$user." on ".$story."!";
          $subject2 = "I've sent a comment to Izzy on ".$story."!";
          $message = "<html>
                        <head>
                          <title>".$user." left the following comment:</title>
                        </head>
                        <body>"
                          .$comment."<br>".$checked."
                        </body>
                      </html>";
            $message2 = "<html>
                          <head>
                            <title>I've left the following comment as ".$user.":</title>
                          </head>
                          <body>"
                          .$comment."
                          </body>
                        </html>";
          $headers ="Content-type:text/html;charset=UTF-8"."\r\n";
          
          $headers .="From: ".$sender;
          mail($emailaddress, $subject, $message, $headers);
          if($_POST["return"]){
            mail($sender, $subject2, $message2, $headers);
          }
          $sent = "Your comment has been sent to the author! Thank you!";
          echo "<script type='text/javascript'>alert('$sent');</script>";
        };
    ?>
    </body>
</html>