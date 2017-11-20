<?php
if(!isset($_GET["module"])){
	header("Location: index.php?module=main");
	die();
}
require $_GET["module"] . '.php';

?>