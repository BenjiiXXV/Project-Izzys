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
          <?php 
    include("db.php");
    // $user = $_POST['user'];
    // $connect = dblogin();
    // $sql = "SELECT * FROM comment WHERE user = ".$user;
    // mysqli_query($connect, $sql);
    // $result = mysqli_query($connect, $sql);

$db = new DB();
$db->selectComment('test43');

    echo "<center>
            <p>An overview of your comments:</p>
                <table>
                    <tr>
                        <th>Post Date</th>
                        <th>Chapter</th>
                        <th>Comment</th>
                    </tr>
                    <tr>
                        <td>".$records['date']."</td>
                        <td>".$records['chapter']."</td>
                        <td>".$records['comment']."</td>
                    </tr>
                </table>
            </center>
         ";
         }
?>
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