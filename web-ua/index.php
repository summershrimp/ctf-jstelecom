<?php
require_once 'flag.php';
if (isset($_SERVER['HTTP_USER_AGENT'])) {
	if (strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'blackberry')) {
		echo "<pre>".$flag."</pre>";
		die();
	}
}

echo "<h>Only welcome blackberry user!</h>";