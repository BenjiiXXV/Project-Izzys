 <?php 
        include_once("db.php");
        if (!empty($_POST)) {
          $sender = $_POST['email'];
          $user = $_POST["user"];
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
//           $sql = "INSERT INTO `comment` (`user`,`comment`, `chapter`, `date`)
//-- VALUES( '".$_POST["user"]."',
// '".$_POST["comment"]."',
// '".$_POST["story"]."',
// '".date("Y/m/d")."')";
//  $watjijwil = connect('comment');
//  msqliquery($watjijwil, $sql);

// Construct db class 
$connection = new DB();

// Call method with params
$result = $connection->addComment($_POST['user'], $_POST['comment'], $_POST['story'], date("Y/m/d"));


          if($_POST["return"]){
          mail($sender, $subject2, $message2, $headers);
          }
          $sent = "Your comment has been sent to the author! Thank you!";
          echo "<script type='text/javascript'>alert('$sent');</script>";
        };
    ?>
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
    </script>