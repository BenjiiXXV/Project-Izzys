<!DOCTYPE html>
<html>
  <head>
    <!--<link rel="stylesheet" type="text/css" href="style.css">-->
    <link rel="icon" type="image/png" href="img/icon.png">
    <link href="bootjq/font-awesome.min.css" rel="stylesheet">
    <link href="bootjq/bootstrap-4.0.0-alpha.6-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <script src="bootjq/jquery-3.1.1.min.js"></script>
    <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
    <script src="https://npmcdn.com/bootstrap@4.0.0-alpha.6/dist/js/bootstrap.min.js"></script>
    <script src="bootjq/bootstrap.min.js"></script>
 </head>

<div class="container">
  <!-- Login Modal -->
  <div class="modal fade" id="myModal" role="dialog">
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
            <button type="submit" class="button btn-block" style="button"><span class="glyphicon glyphicon-off"></span> Login</button>
          </div>
          </form>
          <button type="button" class="button col-sm-4" style="button" data-target="#myModal2">Sign up instead</button>
          <button type="" class="button col-sm-4" style="button" data-dismiss="modal">Forgot Password</button>
        </div>
      </div>
    </div>
  </div> 
   <!-- Registry Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
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
            <button type="submit" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-off"></span>Register me!</button>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

