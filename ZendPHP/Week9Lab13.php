<?php

	/*$val = include 'file.php';
	echo $val;*/
	
	/*$x = 5;
	$y = 1;
	echo maximum($x, $y);*/
	
	
	include_once 'file3.php';
	echo $x." ".$y."<br>";
	$x++;
	echo $x." ".$y."<br>";
	echo "=======================================================<br>";
	
	include_once 'file3.php';
	echo $x." ".$y."<br>";
	echo "=======================================================<br>";
	
	include 'file3.php';
	echo $x." ".$y."<br>";
	echo "=======================================================<br>";
	
	include_once 'file3.php';
	echo $x." ".$y."<br>";
	
?>