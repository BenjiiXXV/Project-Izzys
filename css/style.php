<?php
  include_once("./db.php");
    $db = new DB();
    $records = $db->loadcss($user)[0];

$pageBG = $records['background_color'];
$pageFG = $records['font_color'];
$marked = $records['selected'];
$fontSize = $records['font_size']."px";

?>
<style>
body {
    padding: 1em;
    color: <?php echo $pageFG ?> !important;
    align-content: center;
    background-color: <?php echo $pageBG ?> !important;
    text-align: center;
    width: 100%;
  
}
li {
    display: inline;
}

table {
    border: none;
    background-color: <?php echo $pageBG ?> !important;
    border-collapse: collapse;

}

td {
    border: none;
    color: <?php echo $pageFG ?> !important;
    text-align: center;
}

th {
    border: none;
    color: <?php echo $pageFG ?> !important;
    text-align: center;
}

h1 {
    font-size: 80px;
    font-family: 'Fondamento', cursive;
    margin-bottom: 0px;
}
h2{
    font-family: 'Fondamento', cursive;
}


h4 {
    color: <?php echo $marked?> !important;
}

col{
    padding: 0;
    margin: 0;
}

.show {
    display: block;
}

#myDIV {
    width: 100%;
    padding: 50px 0;
    text-align: center;
    background-color: <?php echo $pageBG ?> !important;
    margin-top: 20px;
}

p {
    align-content: center;
    text-indent: 1%;
    text-align: justify;
    text-align-last: start;
    font-size: <?php echo $fontSize?> !important;
    font-family: 'Garamond';
    width: 60%;
    float: center;
    left: 20%;

}
hr {
    display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid <?php echo $marked?> !important;
    margin: 1em 0;
    padding: 0; 
}

.footer {
  position: absolute;
  bottom: 5px;
  left: 5px;
  padding: 1rem;
  color: <?php echo $marked?> !important;
  text-align: left;
  
}
.comm{
    clear: both;
}

  .modal-header, .close, .modal-footer, .modal-body {
      background-color: rgba(0, 0, 0, 1);
      color:<?php echo $pageFG ?> !important;
      text-align: center;
      border: 0px;
      margin: 0px;
  }

  .form-control{
      text-align: center;
  }
.button {
    background-color: <?php echo $pageBG ?> !important;
    color: <?php echo $pageFG ?> !important;
    font-size: 16px;
    border: solid 1px <?php echo $marked?> !important;
    text-decoration: none;
    cursor: pointer;
    text-align: center !important;
    padding: 8px;
    margin: 1px;
    height: 70px;

}

.button:hover, .button:focus {
    background-color: <?php echo $pageBG ?> !important;
    color: <?php echo $marked?> !important;
}

.dropbtn {
    background-color: <?php echo $pageBG ?> !important;
    color: <?php echo $pageFG ?> !important;
    padding: 8px;
    font-size: <?php echo $fontSize?> !important;
    border: solid 1px <?php echo $marked?> !important;
    cursor: pointer;
    text-align: center;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: <?php echo $pageBG ?> !important;
    color: <?php echo $marked?> !important;
}

.dropdown {
    position: relative;
    display: inline-block;
}


.dropdown-content {
    display: none;
    position: absolute;
    background-color: <?php echo $marked?> !important;
    min-width: 140px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    text-align: center;
}


.dropdown-content .dropdown-menu{
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    background-color: <?php echo $pageBG ?> !important;
    color: <?php echo $pageFG ?> !important;
    border: 1px solid <?php echo $marked?> !important;
}

.dropdown .open .dropdown-content{
    background-color: #9f0000
}

.bottommenu{
    background-color: (1, 0, 0, 1);
    color: <?php echo $pageBG ?> !important;
    font-family: 'Garamond';
    text-align: center;
    align-content: right;
    display: block;
    position: static;
    top: 0; 
    right: 0;
    overflow: hidden;
    padding: 0px;
    margin-right: 0px;
    margin-top: 0px;
    float:none;
}
.meny{
    background-color: (1, 0, 0, 1);
    color: <?php echo $pageBG ?> !important;
    font-family: 'Garamond';
    text-align: center;
    align-content: right;
    display: block;
    position: static;
    top: 0; 
    right: 0;
    overflow: hidden;
    padding: 0px;
    margin-right: 0px;
    margin-top: 0px;
    float:none;
}

a:link {
    color: <?php echo $pageFG ?> !important;
}

a:hover {
     background-color: <?php echo $pageBG ?> !important;
    color: <?php echo $marked?> !important;
    text-decoration: none !important;

}
a.highlight:hover {
    background-color: <?php echo $pageBG ?> !important;
    color: <?php echo $marked?> !important;
    text-decoration: none !important;
}

a:focus {
    background-color: <?php echo $pageBG ?> !important;
    color: <?php echo $marked?> !important;
    text-decoration: none !important;
}
a:visited {
    background-color: <?php echo $pageBG ?> !important;
    color: <?php echo $pageFG ?> !important;
    text-decoration: none !important;
}
.intel1{
    float: center; 
    align-content: center;
    text-align: justify;
    text-align-last: start;
    font-size: <?php echo $fontSize?> !important;
    font-family: 'Garamond';
    margin: 0;
    padding: 0;
}

.ranks{
    border: solid 1px <?php echo $pageFG ?> !important; 
    border-collapse: collapse;
    align-content: center; 
    text-align: left;
}

.rank{
    width: 12%;
    border: solid 1px <?php echo $pageFG ?> !important; 
    border-collapse: collapse;
    align-content: center; 
    text-align: left;
}

</style>