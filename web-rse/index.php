<h1>Ping test</h1>
<form method="GET">
<input name="ip" value="127.0.0.1" type="text">
<input type='submit'>
</form>

<pre>
<?php 

if(isset($_GET['ip'])) {
	system("ping -c 1 " . $_GET['ip']);
}

?>
</pre>