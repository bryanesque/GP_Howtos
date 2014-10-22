<?php
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
$langfile = $lang . ".html";

 if(file_exists($langfile)) {
 		include $langfile;
	} else {
		include ("en.html");
	}

?>
