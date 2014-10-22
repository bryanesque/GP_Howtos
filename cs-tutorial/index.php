<?php
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
$langfile = $lang . ".html";

 if(file_exists($langfile)) {
 		include $langfile;
	} else {
		include ("en.html");
	}

// switch ($lang){
//     case $lang:
// 		if(file_exists($langfile))
// 		echo $langfile;
//     	//include $langfile;
//         break;
//  	default:
//         echo "PAGE EN - Setting Default";
//         //include("en.html");
//         //include EN in all other cases of different lang detection
//         break;

// }
?>
