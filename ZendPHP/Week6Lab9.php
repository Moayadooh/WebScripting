<?php

	/*$symbol = "something";
	 $count = 3;
	 for($i=0;$i<$count;$i++)
	 {
	 echo $symbol."<br/>";
	 }*/
	
	/*$count = 3;
	 $symbol = "*";
	 for($r=0;$r<$count;$r++)
	 {
		 for($c=0;$c<$count;$c++)
		 {
			 if($c!=$r)
			 	echo $symbol;
			 else
			 	echo "_";
		 }
	 	echo "<br/>";
	}*/

 	/*$count = 5;
 	$symbol = "*";
 	for($r=0;$r<$count;$r++)
 	{
 		for($c=$r;$c<$count;$c++)
 		{
 			echo $symbol;
 		}
 		echo "<br/>";
 	}*/
 	
 	$name = array("Laila","Ahlam","Hajer","Faiza");
 	
 	$x = array_rand($name,1);
 	echo $name[$x]."<br/>";
 	
 	$y = array_rand($name,2);
 	echo $y[0]." ".$y[1]."<br/>";
 	echo $name[$y[0]]." ".$name[$y[1]]."<br/><br/>";
 	
 	
 	$cars = array("Toyota"=>"Corola","Honda"=>"PiloT","Nissan"=>"echo");
 	$k = array_key_exists("Nissan", $cars);
 	if ($k)
 		echo "Nissan is exist<br/><br/>";
 	else 
 		echo "Nissan is not exist<br/><br/>";
 	
 	
 	$a = array("Toyota","Honda","Nissan");
 	$b = array("Corola","PiloT");
 	$c = array_combine($a, $b);
 	if ($c)
 		print_r($c);
 	else 
 		echo "The two arrays are not match";

?>