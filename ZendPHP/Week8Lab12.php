<?php

	/*$x = 9;
	function Add($n1,$n2=5) //n2 is a default value
	{
		global $x; //to access the variable outside the function
		$x = 7;
		//echo $x."<br/>";
		return ($n1+$n2);
	}
	echo $x."<br/>";
	echo Add(10)."<br/>";
	echo $x."<br/>";
	echo "<br/>";*/


	/*$x = 7;
	$y = 2;
	function modify($n1)
	{
		global $x;
		$x = $n1;
		$n1 = $n1 + $x;
	}
	echo $x." ".$y."<br/>";
	modify(5);
	echo $x." ".$y."<br/>";*/
	
	
	//Check is the function is exist or not (you can also check for built-in functions)
	/*if (function_exists("Add"))
		echo "Yes, the function is exist <br/>";
	else 
		echo "No, the function is not exist <br/>";*/
	
	
	/*function add()
	{
		static $a = 3; //executed only once
		$a++;
		return $a;
	}
	add();
	add();
	echo add();*/
	
	/*function swap($x, $y)  //Passing arguments by value
	{
		$temp = $x;
		$x = $y;
		$y = $temp;
	}*/
	
	function swap(&$x, &$y)  //Passing arguments by reference
	{
		$temp = $x;
		$x = $y;
		$y = $temp;
	}
	
	$x = 5;
	$y = 9;
	swap($x, $y);
	echo $x.'<br>';
	echo $y.'<br>';
	
?>