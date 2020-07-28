<?php

/*
 * include and require are same but,
 * the different is that if file not exist:
 * -include give worning and the program continue.
 * -require rive error and the program stop.
 */

	/*if (file_exists("file3.php"))
		require 'file3.php';
	else 
		echo "File is not exist<br>";*/
	
	
	/*if (is_file("file3.php"))
		echo "is a file<br>";
	else
		echo "is not a file<br>";*/
	
	
	/*if (is_dir("temp"))
		echo "temp is a directory<br>";
	else
		echo "temp is not a directory<br>";*/
	
	
	date_default_timezone_set("Asia/Muscat");
	
	$atime = fileatime("file.php"); //access time
	$mtime = filemtime("file.php"); //modification time
	
	//echo "Last access time = $atime <br>";
	//echo "Last modification time = $mtime <br>";
	echo date("D d M Y H:i",$atime)."<br>";
	echo date("D d M Y H:i",$mtime)."<br>";

?>