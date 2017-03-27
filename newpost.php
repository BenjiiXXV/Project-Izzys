<?php
include("head.php")
?>
<html>


<form class="form-horizontal">
<fieldset>
<div class="form-group">
  <label class="col-md-4 control-label" for="mainpage">Page:</label>
  <div class="col-md-2">
    <select id="mainpage" name="mainpage" class="form-control">
      <option value="1">Greenberg's Experiment</option>
      <option value="2">War of the Angels</option>
      <option value="3">Dragon's Legacy [GoL]</option>
      <option value="4">Dead Projects</option>
    </select>
  </div>
<!-- Text input-->
  <label class="col-md-1 control-label" for="postTitle">Post Titel:</label>  
  <div class="col-md-1">
  <input id="postTitle" name="postTitle" type="text" placeholder="new chapter" class="form-control input-md" required="">
  </div>
</div>
<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="storypost">Story post:</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="storypost" name="storypost" style="text-align: justify;
    text-align-last: start;">Your new epic post.
</textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button onclick="newPost()" id="singlebutton" name="singlebutton" class="button">POST</button>
  </div>
</div>
</fieldset>
</form>

<?php

//MAKE SURE IT MAKES BACKUP BEFORE WRITING NEW MENU
function newPost(){
$myfile = fopen("", "w") or die("Unable to open file!");
$txt = "";
fwrite($myfile, $txt);
fclose($myfile);
}
?>