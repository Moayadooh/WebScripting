<?php

	$arr = ["Mohanned","Manasik","Mohammed"];
	/*$var = "Manasik";
	if(is_array($var))  //Check whether this variable is an array
		echo "This is an array";
	else
		echo "This is not an array";
	
	
	if(in_array($var,$arr))  //check whether the value is exist in array
		echo "<br/>".$var." is available in array";
		
		
	if(count($arr))  //if array is empty will return 0
		echo "<br/>"."the number of elements in array is ".count($arr);*/
		
		
	$key = array_rand($arr,1);  //Select random index in array
	echo "we choose ".$arr[$key];
	
	
	$key = 3;
	if(array_key_exists($key,$arr)) //check whether the index is exist in array
		echo "<br/>index ".$key." is exist";
	else
		echo "<br/>index ".$key." is not exist";

?>