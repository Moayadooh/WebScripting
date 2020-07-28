<?php

	$fh = fopen('file.txt','r');
	
	if(!$fh)
		exit('unable to open the file');
	
	//while(!feof($fh)){
		//echo fread($fh,filesize('file.txt'));
		echo fread($fh,1024); //echo 1024 characters from the file each time
	//}
	
	fclose($fh);
	
	
	
	/*$fh = fopen('numbers.txt','r');
	$num = fread($fh,2);
	$new_count = ($num + 1);
	fclose($fh);
	
	$fa = fopen('numbers.txt','w');
	fwrite($fa,$new_count,100);
	fclose($fa);
	
	echo "<h1>Hit number $new_count</h1>";*/
	
	
	
	/*$data = "This is important information please!!";
	file_put_contents('record.txt',$data,FILE_APPEND); //fast writing*/
	
	//echo "<br/>".file_get_contents('record.txt'); //fast reading
	
?>