<h1>Show picture</h1>
<form method="GET">
<input name="url" type="text">
<input type='submit'>
</form>


<?php 

if(isset($_GET['url'])) {
	$a = file_get_contents($_GET['url']);
	$file_name = "upload/" . uniqid();
	file_put_contents($file_name, $a);
	echo '<img src="'.$file_name.'">';
}

?>
