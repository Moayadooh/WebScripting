<?php

	echo "Some thing <br />";
	print "Some thing else <br /><br />";
	
	$a = 3.15;
	echo "is Integer".is_int($a)."<br />";
	echo "is String".is_string($a)."<br />";
	echo "is Double".is_double($a)."<br />";
	echo "is Boolean".is_bool($a)."<br />";
	
	echo gettype($a)."<br />";
	
	if(is_int($a))
		echo "is int <br />";
	else 
		echo "is not an int <br />";
	
	$x;
	echo gettype($x)."<br />";
	
	settype($a, 'integer');
	echo $a."<br />";
	
	$z = "31x1";
	$val = (int)$z;
	echo $val."<br />";
	
	$var = 4;
	$var .= " test";
	echo $var."<br />";

?>