<?php
	$x = 2;
	
	//++$x; //3 preincrement
	$x++; //3 postincrement
	
	//$y = $x++ + 2; //5
	$y = ++$x + 2; //6
	
	//echo $y;
?>

<?php
	//define("PI", 3.14); //by default it is case sensitive
	define("PI", 3.14, true); //case insensitive (you can type the variable as small or capital letter)
	//define('PI', 3.14);
	echo pI;
	
	
	$x = true;
	$y = true;
	echo $x xor $y;
?>
