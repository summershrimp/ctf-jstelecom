<pre>
flag is galf{this_is_fake_flag}
if you come from 127.0.0.1, you will get the true flag.
</pre>

<?php
$flag = "flag{simple_ssrf}";
$ip = $_SERVER['REMOTE_ADDR'];
if ($ip === '127.0.0.1') {
	echo 'Real flag:<pre>' . $flag .'</pre>';
}
?>