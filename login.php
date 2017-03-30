<?php
include ('privateShizzle.php');
include("db.php");
$db = new DB();
session_start ();
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
          <form role="form" method="get">
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
            <button type="submit" name="submit" value="register" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-off"></span>Register me!</button>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php


   if (isset($_POST["submit"]) && $_POST['submit'] == ('register')) {


       $user = ($_POST["user"]);
       $email = ($_POST["email"]);
       $password = ($_POST["psw"]);
       $password2 = ($_POST["psw2"]);

       if ($_POST['psw'] == $_POST['psw2']) {


           // Call method with param
           $result = $db->storeUser($_POST['email'], $_POST['user'], $_POST['password']);
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
               $headers = "Cc: erikgraaff@gmail.com" . "\r\n";
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


if (isset($_GET["submit"]) && $_GET['submit'] == ('login')){

    // select query opbouwen

    $result = $db->loginUser($_GET['user'], $_GET['password']);


    if (count($result) > 0 ){

            var_dump($result);
                echo 'You are logged in';
                    $_SESSION ['role'] = 'user';
                    echo "<script>alert('You are logged in!')</script>";
                    header("location: index.php?content=home");

                    /*
                    switch($record["user-role"])
                    {

                        case "ADMIN":
                            header("location: dashboard.php?content=admin_home");
                            break;
                        case "BETA":
                            header("location: dashboard.php?content=beta_home");
                            break;
                        case "FOLLOWER":
                            header("location: dashboard.php?content=follower_home");
                            break;
                        default:
                            header("location: dashboard.php?content=home");
                            break;

                    }
                    */
                }
                else
                {
                    echo "Your Username, Password or the combination is not known";
                    //header("url=index.php?content=login_form");
                }
        }


/*
$mode = $_REQUEST["mode"];
if ($mode == "login") {
    $username = trim($_POST['username']);
    $pass = trim($_POST['password']);

    if ($username == "" || $pass == "") {

        $_SESSION["errorType"] = "danger";
        $_SESSION["errorMsg"] = "Enter manadatory fields";
    } else {
        $sql = "SELECT * FROM users WHERE username = :uname AND password = :upass ";

        try {
            $stmt = $DB->prepare($sql);

            // bind the values
            $stmt->bindValue(":uname", $username);
            $stmt->bindValue(":upass", $pass);

            // execute Query
            $stmt->execute();
            $results = $stmt->fetchAll();

            if (count($results) > 0) {
                $_SESSION["errorType"] = "success";
                $_SESSION["errorMsg"] = "You have successfully logged in.";

               
                $_SESSION["rolecode"] = $results[0]["u_rolecode"];
                $_SESSION["username"] = $results[0]["u_username"];

                redirect("dashboard.php");
                exit;
            } else {
                $_SESSION["errorType"] = "info";
                $_SESSION["errorMsg"] = "username or password does not exist.";
            }
        } catch (Exception $ex) {

            $_SESSION["errorType"] = "danger";
            $_SESSION["errorMsg"] = $ex->getMessage();
        }
    }
   // redirect function is found in functions.php page
    redirect("index.php");
}
*/
?>


