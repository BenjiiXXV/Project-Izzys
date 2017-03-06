<?php
  require("head.php");
?>
<html>
  
 <head>
    <title>MY PROFILE</title>
</head>
  <body>

<html>
<body>
    <nav class="meny navbar-toggleable-md navbar navbar-right" style="height:200px;">
        <div class="container-fluid">
            <!-- Collect the nav links, forms, and other content for toggling -->
           
                <ul class="nav navbar-nav">
                    <li><button onclick="home()" class="button" style="button" id="comments">HOME</a></li>
                    <li><button onclick="comments()" class="button" style="button" id="comments">COMMENTS</li>
                    <li><button onclick="chapters()" class="button" style="button" id="chapters">CHAPTERS</li>
                    <li><button onclick="style()" class="button" style="button" id="style">STYLE</li>
                    <li><button onclick="logoff()" class="button" style="button" id="logoff">LOG OFF</button></li>
                </ul>
           
        </div><!-- /.container-fluid -->
    </nav>
</body>
<script>

          function home(){
            window.location.href = "/index.php";
          }
          function comments(){
            // pull comments from database, display
          }

          function chapters(){
            //pull read chapters from database, display, allow toggling and navigating
          }

          function style(){
            //pull user css settings, allow modification
          }

          function logoff(){
            // prompt logoff 
          }
</script>
 </body>