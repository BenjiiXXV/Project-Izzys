<?php
session_start();
  require_once("head.php");
  include_once("homepageNav.php");
  if(!isset($_SESSION['role'])){
  $_SESSION['role']='NOBODY';
  }
?>
<html>
  <head>
    <title>Izzy's Epicality</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
  </head>
 <body class="mainpageImage">
 </body>
      <footer>
      <div>
        <div class="footer col-xs-5 pull-left">
          <footer>A website dedicated to Izzy's deep dark holes of inspiration.</footer>
        </div>
        <div class="footer2 col-xs-5 pull-right">
          <footer>LAST POST: Greenberg's Experiment at January 2nd, 2017<br><br>
          <a href="carousel.php" style="button" class="button" >CAROUSEL</button></footer>
          
        </div> 
      </div>
      </footer>
 

   
 
