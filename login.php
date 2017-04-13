<?php
session_start();
include_once("db.php");
$db = new DB();
?>
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
          <form role="form" method="POST">
            <div class="form-group">
              <label for="user"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" name="user" placeholder="Enter Username">
            </div>  
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" name="psw" placeholder="Enter password">
            </div>
            <div class="modal-footer">
            <button type="submit" name="submit" value="login" class="button col-sm-12" style="button"><span class="glyphicon glyphicon-off"></span> Login</button>
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
          <form role="form" method="post">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" name="user" placeholder="Enter Username">
            </div>  
             <div class="form-group">
              <label for="email"><span class="glyphicon glyphicon-email"></span> Email</label>
              <input type="text" class="form-control" name="email" placeholder="Enter Email">
            </div> 
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" name="psw" placeholder="Enter password">
            </div>
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" name="psw2" placeholder="Retype password">
            </div>
            <div class="modal-footer">
           
            <button onclick="registry()" value="register" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-off"></span>Register me!</button>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php

function registry(){
   if (isset($_POST) ) {


       $user = ($_POST["user"]);
       $email = ($_POST["email"]);
       $password = ($_POST["psw"]);
       $password2 = ($_POST["psw2"]);

       if ($password == $password2) {


           // Call method with param
           $result = $db->storeUser($email, $user, $password);
           if ($result) {
               $emailaddress = $_POST["email"];
               $subject = "Activation account";

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
                        <h3>Dear ".$user.", </h3>" .
                   "<p>Thank you for registering, click below on the link for the activation</p>" .
                   "<p><a href='http://izzys.hol.es/privatetest/index.php?content=activate&
                        '".$password."'>Activation</a></p><p> to activate your account</p>" .
                   "<p>With dear regards,</p>" .
                   "The Admin
                        </body>
                        </html>";
            
               $headers ="From: noreply@izzys.hol.es"."\r\n";
               $headers .= "Content-Type: text/html; charset=UTF-8";
               mail($emailaddress, $subject, $messageHtml, $headers);

               echo "Your account has been activated.";
               header("refresh:3; url=./index.php?content=home");
               $sql = "INSERT INTO `fonts` AND `chapter_read` (`user`)
                 VALUES                                 ('".$user."')";
           } else {
               //wanneer de query niet goed is ontvangen of uitgevoerd, meldt dit en stuur door
               echo "This Email address is already registered with us. Please choose a different one.";
               header("refresh:3; url=./index.php?content=register_form");
           }
       } else {
           echo "The passwords that have been entered are not the same. Please try again.";
           header("refresh: 10; url=./index.php?content=register_form");
       }
   }

}


if (isset($_POST["submit"]) && $_POST['submit'] == ('login')){

    // select query opbouwen

    $result = $db->loginUser($_POST['user'], $_POST['psw']);


    if (count($result) > 0 ){
$_SESSION ['user'] = $result['user'];
 $_SESSION ['role'] = $result['user_role'];
                echo 'You are logged in';
                   
                   
                  
                   header("Refresh:0");

                     
                  
                    
                }
                else
                {
                    echo "Your Username, Password or the combination is not known";
                    //header("url=index.php?content=login_form");
                }
        }



?>


