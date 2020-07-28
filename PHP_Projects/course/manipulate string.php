<?php

	$a = "apple";
	$b = "ball is a game material";
	$sentance = "This is a sentance";
	
	//String functions
	echo ucfirst($a);
	echo "<Br />";
	echo ucwords($sentance)."<br />";
	echo strtoupper($a);
	echo "<br />";
	echo strrev($a);
	echo "<br />";
	echo str_repeat($a." ",3);
	echo "<br />";
	echo trim($b,"material");
	echo "<br />";
	
	
	//Printing Strings
	echo "<br />";
	echo "The value of a is {$a}";
	echo "<br />";
	echo 'Hello what \'s up?';

?>