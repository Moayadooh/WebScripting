<?php

	$fr = fopen("mark.txt", "r");
	$total = 0;
	$count = 0;
	while (!feof($fr))
	{
		$line = fgets($fr);
		$total += $line;
		$count++;
		//echo $line."<br>";
	}
	echo "The average is ".($total/$count);
	fclose($fr);
	
	//fgets     read as string
	//fgetc     read as character
	// a   append >> add data to the file
	// r >> read     w >> write

?>