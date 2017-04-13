<?php
session_start();
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
                    <li><button onclick="logoff()" class="button" style="button" id="logoff">LOG OFF</li>
                </ul>
           
        </div><!-- /.container-fluid -->
    </nav>

    <p id="content"></p>
</body>
<script>


    function home(){
        $(document).ready(function(){
            $("#home").click(function(){

            });
        });
    }


          <?php
          include_once ("db.php");
                echo '<script>
                      document.getElementById("comments").innerHTML = "COMMENTS";
                      function comments(){
                          $(document).ready(function(){
                              $("#comment").click(function(){
                                  
                              });
                          });
                      }
                 </script>';
          $connection = new DB ();
          $result = $connection->selectComment($_POST['user'], $_POST['date'], $_POST['chapter_read'], $_POST['comments']);
         foreach($records as $results) {
          echo "
            
            <center>
            <p>These are the comments that you have posted</p>
                <table>
                    <tr>
                        <th>User</th>
                        <th>Post Date</th>
                        <th>Chapter</th>
                        <th>Comments</th>
                    </tr>
                    <tr>
                        <td>" . $records['user'] . "</td>
                        <td>" . $records['date'] . "</td>
                        <td>" . $records['chapter_read'] . "</td>
                        <td>" . $records['comments']. "</td>
                        
                    </tr>
                </table>
            </center>
         ";
          }
                ?>


    <?php
    include_once ("db.php");
            echo '<script>
                      document.getElementById("chapters").innerHTML = "CHAPTERS";
                      function chapters(){
                          $(document).ready(function(){
                              $("#chapters").click(function(){
                                  
                              });
                          });
                      }
                 </script>';
    $connection = new DB ();
    $result = $connection->selectRead($_POST['user']);
    foreach($records as $results) {
        echo "
            
            <center>
            <p>These are the chapters that you have read</p>
                <table>
                    <tr>
                        <th>Chapter</th>
                    </tr>
                    <tr>
                        <td>" . $records['chapter_read'] . "</td>
                        
                    </tr>
                </table>
            </center>
         ";
    }
    ?>
   
          function style(){
            //pull user css settings, allow modification
          };


          document.getElementById("logoff").innerHTML = "logoff";
          function logoff(){
              window.location.href = "logout.php";
          };

</script>
</html>