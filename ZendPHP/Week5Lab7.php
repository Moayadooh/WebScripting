<?php
	//EmpInfo
	$arr = array(
			array("name"=>"Khalid","salary"=>1200),
			array("name"=>"Aya","salary"=>4000),
			array("name"=>"Reem","salary"=>400)
	);
	
	//echo $arr[1]["salary"];
	
	/*$salary = array(1000,2000,800,3000);
	$maxSaVal = $salary[0];
	$minSaVal = $salary[0];
	foreach ($salary as $val)
	{
	if($val>$maxSaVal)
	 	$maxSaVal = $val;
	 if($val<$minSaVal)
	 	$minSaVal = $val;
	 }
	 	echo "The maximum salary is ".$maxSaVal."<br/>";
	 	echo "The minimum salary is ".$minSaVal."<br/>";*/
	 	
 	/*$maxSal = $arr[0]["salary"];
 	$minSal = $arr[0]["salary"];
 	$maxName = $arr[0]["name"];
 	$minName = $arr[0]["name"];
 	foreach ($arr as $val){
 	if($val["salary"]>$maxSal){
 	$maxSal = $val["salary"];
 	$maxName = $val["name"];
 	}
 		
 	if($val["salary"]<$minSal){
 	$minSal = $val["salary"];
 	$minName = $val["name"];
 	}
 	}
 	echo "The maximum salary for $maxName is ".$maxSal."<br/>";
 	echo "The minimum salary for $minName is ".$minSal."<br/>";*/
	
	/*$maxSal =$arr[0]["salary"];
	$minSal =$arr[0]["salary"];
	$maxName = $arr[0]["name"];
	$minName = $arr[0]["name"];
	for($i=0;$i<3;$i++){
		if($arr[$i]["salary"]>$maxSal){
			$maxSal = $arr[$i]["salary"];
			$maxName = $arr[$i]["name"];
		}
			
	if($arr[$i]["salary"]<$minSal){
			$minSal = $arr[$i]["salary"];
			$minName = $arr[$i]["name"];
		}
	}
	echo "The maximum salary for $maxName is ".$maxSal."<br/>";
	echo "The minimum salary for $minName is ".$minSal."<br/>";*/
	 
	 $n = 5;
	 $fact = 1;
	 for($i=2;$i<=$n;$i++)
	 {
	 	$fact *= $i;
	 }
	 echo $n."! = ".$fact."<br/>";
	 
	 $n = 20;
	 $prime = true;
	 for($i=2;$i<$n;$i++){
 		$r = $n % $i;
 		if($r==0)
 			$prime = false;
	 }
	 if ($prime)
	 	echo $n." is a prime number<br/>";
	 else 
	 	echo $n." is not a prime number<br/>";
	 
 	/*$num = array(2,8,9,6,7,3,45,15,21,11);
 	for ($i = 0; $i < count($num); $i++) {
 	    $prime = true;
 	    for ($j = 2; $j < $num[$i]; $j++) {
 	        $r = $num[$i] % $j;
 	        if ($r==0) {
 	            $prime = false;
 	            break;
 	        }
 	    }
 	    if ($prime)
 	        echo "$num[$i] is a prime number <br/>";
 	        else
 	            echo "$num[$i] is not a prime number <br/>";
 	}*/
	 
?>