<p>image inspector</p> 
<?php 
mt_srand((time() % rand(1,10000) + rand(2000,5000))%rand(1000,9000)+rand(2000,5000)); 
// files directory flushed every 3min
setcookie('test', mt_rand(), time(), '/'); 
if (isset($_POST['submit'])) { 
  $check = getimagesize($_FILES['file']['tmp_name']);
  if($check !== false) {
    echo 'File is an image - ' . $check['mime'];
    $filename = 'upload/'.mt_rand().'_'.$_FILES['file']['name']; // prevent path traversal
    move_uploaded_file($_FILES['file']['tmp_name'], $filename);
    echo "<br>\n";
    system('/usr/bin/file -b '.escapeshellarg($filename));
    echo "<br>\n";
  } else {
    echo "File is not an image";
  }
}
?>
<form method="post" enctype="multipart/form-data"> 
  Select image to upload:
  <input type="file" name="file">
  <input type="submit" value="Upload Image" name="submit">
</form>
<?php
highlight_file(__FILE__);
?>