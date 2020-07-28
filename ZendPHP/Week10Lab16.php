<?php

	/*if (!file_exists('mark1.txt'))
		exit('Unable to open the file!!');*/
	//($fr = fopen('mark1.txt', 'r')) or exit('Unable to open the file!!');
	$fr = fopen('mark.txt', 'r');
	$max = 0;
	while (!feof($fr))
	{
		$line = fgets($fr);
		if($line>$max)
			$max = (int)$line;    //we must do casting because will read the value as a string
	}
	echo "The maximum mark is ".$max."<br>";
	fclose($fr);
	
	/*$content = file_get_contents('mark.txt');  //read full file as string
	echo $content;*/
	
	/*$fr = fopen('mark.txt', 'w');
	fwrite($fr, "1000\n");  // erase the data and re-write again
	fputs($fr, "8000\n");  // add data
	fclose($fr);*/
	
	//file_put_contents("mark.txt", "70");             //will erase the old and write new content
	//file_put_contents("mark.txt", "70",FILE_APPEND); //will append the content
	
	$fr = fopen('mark.txt', 'w');
	flock($fr,LOCK_SH); //you can type 1 insted of LOCK_SH
	fwrite($fr, "1000\n");
	fputs($fr, "8000\n");
	flock($fr, LOCK_UN);
	fclose($fr);
	
	//LOCK_SH   1
	//LOCK_EX   2
	//LOCK_UN   3
	
?>