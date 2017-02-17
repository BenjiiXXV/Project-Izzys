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
  <h2>Modal Login Example</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" id="myBtn">Login</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter Username">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="text" class="form-control" id="psw" placeholder="Enter password">
            </div>
             <div class="checkbox">
            <label><input type="checkbox" value="" checked>Remember me</label>
          </div>
            <div class="modal-footer">
            <button type="submit" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </div>
          </form>
          <button type="" class="btn btn-default btn-info pull-left" data-dismiss="modal">Sign up!</button>
          <button type="" class="btn btn-default btn-warning pull-right" data-dismiss="modal">Forgot Password?</button>
        </div>
      </div>
    </div>
  </div> 
</div>

<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>