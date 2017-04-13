<?php
//backup?
  include_once('db.php');
  if (isset($_POST['singlebutton']))
  {
    $pp = $_POST['mainpage'];
    if ($_POST['mainpage'] == 'gb'){
      $dir = 'ge' ;
    } else if ($_POST['mainpage'] == 'dl'){
      $dir = 'gol';
    } else {
      $dir = $_POST['mainpage'];
    }
    $chapt = $_POST['postTitle'];
    $rank = $_POST['permissions'];
    $chaptphp = './' . $dir . '/' . $chapt . '.php';
    $myfile = fopen($chaptphp, "w") or die("Unable to open file!");
    $txt = $_POST["storypost"];
    fwrite($myfile, $txt);
    fclose($myfile);
    $DB = new DB();
    $DB->addpost($pp, $chapt, $rank);
  }
?>
<html>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form-horizontal">
<fieldset>
<div class="form-group">
  <label class="col-md-4 control-label" for="mainpage">Page:</label>
  <div class="col-md-2">
    <select id="mainpage" name="mainpage" class="form-control">
      <option value="gb">Greenberg's Experiment</option>
      <option value="wota">War of the Angels</option>
      <option value="dl">Dragon's Legacy [GoL]</option>
      <option value="dead">Dead Projects</option>
    </select>
  </div>

    <label class="col-md-4 control-label" for="permissions">Visible for:</label>
  <div class="col-md-2">
    <select id="permissions" name="permissions" class="form-control">
      <option value="4">EVERYBODY</option>
      <option value="3">FOLLOWER</option>
      <option value="2">BETA</option>
      <option value="1">ADMIN</option>
    </select>
  </div>
<!-- Text input-->
  <label class="col-md-1 control-label" for="postTitle">Post Titel:</label>  
  <div class="col-md-1">
  <input id="postTitle" name="postTitle" type="text" placeholder="new chapter" class="form-control input-md" required="">
  </div>
<!-- Textarea -->
  <label class="col-md-4 control-label" for="storypost">Story post:</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="storypost" name="storypost" style="text-align: justify;
    text-align-last: start;">Your new epic post.
</textarea>
  </div>

<!-- Button -->
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="button">POST</button>
  </div>
</div>
</fieldset>
</form>

