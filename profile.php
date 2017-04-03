<?php
  require_once("head.php");
  include_once("db.php");
?>
<html>
  
 <head>
    <title>MY PROFILE</title>
</head>

<body>
    <nav class="meny navbar-toggleable-md navbar navbar-right" style="height:200px;">
        <div class="container-fluid">
            <!-- Collect the nav links, forms, and other content for toggling -->
           
                <ul class="nav navbar-nav">
                    <li><button onclick="home()" class="button" style="button" id="home">HOME</li>
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
        $(document).ready(function(){
            $("#home").click(function(){

            });
        });
    }

          function comments(){
          <?php 

    // $user = $_POST['user'];
    // $connect = dblogin();
    // $sql = "SELECT * FROM comment WHERE user = ".$user;
    // mysqli_query($connect, $sql);
    // $result = mysqli_query($connect, $sql);


    while ( $records = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
         { 
    echo "<center>
            <p>These Are The Best Players In Tha World Biatch!!!</p>
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
          function chapters () {
              document.getElementById('chapters').innerHTML = 'CHAPTERS';

              <?php
              //pull read chapters from database, display, allow toggling and navigating
              while ($records = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                  echo "
            
            <center>
            <p>These Are The Best Chapters Of The World</p>
                <table>
                    <tr>
                        <th>Post Date</th>
                        <th>Chapter</th>
                        
                    </tr>
                    <tr>
                        <td>" . $records['date'] . "</td>
                        <td>" . $records['chapter_read'] . "</td>
                        
                    </tr>
                </table>
            </center>
         ";
              }
              ?>
          }
          function style(){
            //pull user css settings, allow modification
          }

          <?php
          echo'       
          document.getElementById("logoff").innerHTML = "LOG<br>OUT";
          function logoff(){
              window.location.href = "logout.php";
          }
          ';
          ?>
</script>
</html>
