<?php

	//Indexed array
	/*$var = ["apple","ball","cat"];
	echo $var[2]."<br/><br/>";
	
	$var1 = array("orange",8,"banana");
	echo $var1[1];
	
	echo "<pre>";
	print_r($var);
	echo "</pre>";*/
	
	
	
	//Associative array
	/*$arr = ["name"=>"Moayad","age"=>22];
	echo $arr["age"]."<br/><br/>";
	
	$arr1 = array("first_name"=>"Moayad","last_name"=>"Salim");
	echo $arr1["first_name"];*/
	
	
	
	//Multidimensional array
	$mdarr = ["name"=>["first_name"=>"Moayad","last_name"=>"Salim"],
	"favorite_progrmaming_language"=>["web"=>"Python","mobile"=>"Kotlin","pc"=>"C#"]];
	echo $mdarr["name"]["first_name"]."<br/>";
	echo $mdarr["favorite_progrmaming_language"]["web"];

?>