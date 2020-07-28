<?php

	$names = array("Hana","Aya","Amjed");
	sort($names);
	
	foreach ($names as $v)
		echo $v."<br/>";
	
	$students = array("H"=>"Hana","A"=>"Aya","M"=>"Amjed");
	sort($students);
	
	foreach ($names as $k=>$v)
		echo $k."=>".$v."<br/>";
	
	//echo $students["H"];  >> syntax error
	//rsort  >> order from highest to lowest (reverse order)
	//asort >> will keep track of key and will order them from lowest to highest
	//arsort >> will keep track of key and will order them from highest to lowest
	//ksort  >> order according to the key
	//krsort  >> order according to the key (reverse order)
	
	$x = 7.4565;
	$y = 1.3535445;
	printf("%.2f <br/>",$x);
	printf("%.2f , %.3f <br/>",$x,$y);

	date_default_timezone_set("Asia/Muscat");
	echo date("d/m/y")."<br/>";
	echo date("D/M/Y")."<br/>";
	echo date("m-d-y")."<br/>";
	echo date("l")."<br/>";
	echo date("H:i:s")."<br/>";
	/*$date = getDate();
	 print_r($date);*/
	
	$s = " Php ";
	$d = strlen($s);
	echo strlen($s)."<br/>";
	
	$s1 = trim($s);
	echo strlen($s1)."<br/>";
	
	echo strtoupper($s)."<br/>";
	echo strtolower($s)."<br/>";
?>
