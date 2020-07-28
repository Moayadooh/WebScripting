<?php
	$a = -1;
	if($a > 0)
		echo $a." is a positive number <br/>";
	else
		echo $a." is a negative number <br/>";
	
	
	$num = 9;
	if($num%2==0)
		echo $num." is an even number <br/>";
	else 
		echo $num." is an odd number <br/>";
	
	
	$x = 5;
	$y = 25;
	/*if($x>$y)
		echo $x." is the maximum number <br/>";
	else 
		echo $y." is the maximum number <br/>";*/
	
	$max = ($x>$y) ? $x : $y;
	echo $max." is the maximum number <br/>";
	
	
	$score = 144;
	$check = 1;
	if($score>=90 && $score<=100)
		$grade = 'A';
	elseif($score>=80 && $score<90)
		$grade = 'B';
	elseif($score>=70 && $score<80)
		$grade = 'C';
	elseif($score>=60 && $score<70)
		$grade = 'D';
	elseif($score<=59 && $score>=0) 
		$grade = 'F';
	else{
		echo "Invalide score <br />";
		$check = 0;
	}
	
	if($check==1)
		echo "Grade is $grade <br/>";
	
		
	$m = 2;
	switch ($m)
	{
		case 1:
			$n = "January";
			break;
		case 2:
			$n = "February";
			break;
		default:
			echo "Invalid month number <br />";
			break;
		
	}
?>