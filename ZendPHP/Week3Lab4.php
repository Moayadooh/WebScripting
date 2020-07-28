<?php
	//Indexed array
	$GCC = array("Oman","KSA","UAE","Kuwait");
	$days = array(1,3,6,9);
	echo $GCC[2]."<br/>";
	
	$days[0] += 5;
	//$days[] += 12; //Add new element
	$days[] = 15; //same with or with out plus sign
	
	foreach ($days as $v)
		echo $v."<br/>";
	//print_r($GCC);
	
	echo "<br/>";
	
	
	//Associative array
	$arr = array("name"=>"Moayad","age"=>22);
	$arr["age"] -= 1;
	echo $arr["age"]."<br/>";
	
	$arr["jop"] = "Student"; //Add new element
	foreach ($arr as $k=>$v)
		echo $k." => ".$v."<br/>";
	
	echo "<br/>";
	
	
	//Range
	$a = range(3,32);
	foreach ($a as $v)
		echo $v."<br/>";
	
	$b = range('a','z');
	foreach ($b as $v)
		echo $v."<br/>";
?>
