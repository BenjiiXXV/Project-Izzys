<?php

$user = $_POST['name'];
$sender = $_POST['email'];
$text = $_POST['comment'];

if (isset($user) && isset($sender) && isst($text)) {
          if($_POST["return"]){
            $checked = $user." received a copy of the comment.";
          } else {
            $checked = $user." did not receive a copy of the comment.";
          };
          $emailaddress = "megan.j.online@gmail.com";
          $subject = "Comment from ".$user."!";
          $subject2 = "I've sent a comment to Izzy!";
          $message = "<html>
                        <head>
                          <title>".$user." left the following comment:</title>
                        </head>
                        <body>"
                          .$text."<br>".$checked."
                        </body>
                      </html>";
            $message2 = "<html>
                          <head>
                            <title>I've left the following comment as ".$user.":</title>
                          </head>
                          <body>"
                          .$text."
                          </body>
                        </html>";
          $headers ="Content-type:text/html;charset=UTF-8"."\r\n";
          $headers .="From: ".$sender;
         
    if (mail($emailaddress, $subject, $message, $headers)) {
        echo 'Mail has been send successful';
          if($_POST["return"]){
            mail($sender, $subject2, $message2, $headers);
          }
    }
    else {
        echo 'Something went wrong when sending your email';
    }
}
else {
    echo 'Not all data is filled';
}