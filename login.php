
<div class="container">
  <!-- Login Modal -->
  <div class="modal fade" id="loginmodal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span>LOGIN</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter Username">
            </div>  
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" id="psw" placeholder="Enter password">
            </div>
            <div class="modal-footer">
            <button type="submit" id="idlogin" class="button col-sm-12" style="button"><span class="glyphicon glyphicon-off"></span> Login</button>
          </div>
          </form>
      </div>
    </div>
  </div> 
 </div>
   <!-- Registry Modal -->
  <div class="modal fade" id="registrymodal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span>REGISTER</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter Username">
            </div>  
             <div class="form-group">
              <label for="email"><span class="glyphicon glyphicon-email"></span> Email</label>
              <input type="text" class="form-control" id="email" placeholder="Enter Email">
            </div> 
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" id="psw" placeholder="Enter password">
            </div>
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" id="psw2" placeholder="Retype password">
            </div>
            <div class="modal-footer">
            <button type="submit" id="idregister" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-off"></span>Register me!</button>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
   
   if (isset($_POST["idregister"]))
   {
      include("./connect_db.php");
    
      $user = ($_POST["user"]);
      $email = ($_POST["email"]);
      $password = ($_POST["psw"]);
      $password2 = ($_POST["psw2"]);
      
    if (strcmp($_POST["psw"], $_POST["psw2"]))
    {

      $sql = "SELECT `email` FROM `users` WHERE `email` = '".$_POST["email"]."'";
      $result = mysqli_query($conn, $sql);

      $record =  mysqli_fetch_array($result, MYSQLI_ASSOC);

      $sql = "INSERT INTO `users` (`id`,
                                   `user`,
                                   `email`, 
                                   `password`,
                                   `User_role`)
              VALUES             (NULL,
                                  '".$user."',
                                  '".$email."', 
                                  '".$psw."',
                                  "FOLLOWER")";
      
      // vuur de query af op de database via de verbinding $conn
      $result = mysqli_query($conn, $sql);
     // $last_id = mysqli_insert_id($conn);

      //als de query correct is ontvangen en uitgevoerd
      if ($result)
      {
        $emailadress = $_POST["email"];
        $subject = "Activatie account";
     
       $messageHtml = "<!DOCTYPE html>
                        <html>
                        <head>
                        <style>
                        body
                        {
                            font-family: Verdana, Arial;
                            font-size: 1em;
                            color: rgb(30, 0, 255);
                        }

                        </style>
                        </head>
                        <body>
                        <h3>Beste ". $user.", </h3>".
                        "<p>Bedankt voor het registreren, klik op onderstaande link</p>".
                        "<p><a href='http://localhost/AM1A/LoginRegistration/index.php?content=activate&id=".
                        $last_id."&pw=".$password."'>Activatie</a></p><p> om uw account te activeren</p>".
                        "<p>Met vriendelijke groet,</p>".
                        "Admin
                        </body>
                        </html>";           

        $headers = "Cc: megan.j.online@gmail.com, erikgraaff@gmail.com"."\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8";
        mail($emailadress,  $subject, $messageHtml, $headers);
      
         echo "U bent geregistreerd";
         header("refresh:3; url=./index.php?content=home");

         $sql = "INSERT INTO `fonts` AND `chapter_read` (`user`)

                 VALUES                                 ('".$user."')";

      }
      else
      {
          //wanneer de query niet goed is ontvangen of uitgevoerd, meldt dit en stuur door
         echo "Het emailadres is al bekend in onze database. Kies een nieuw mailadres";
         header("refresh:3; url=./index.php?content=register_form");
      }

   }
   else
   {
    echo"De door u ingevoerde wachtwoorden komen niet overeen. Probeer het nog een keer";
    header("refresh: 3; url=./index.php?content=register_form");

   }
}
?>


