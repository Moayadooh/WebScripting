<?php
/*
$var=["red","blue","green","yellow"];
echo $var[0]."<br />";
echo $var[1]."<br />";
echo $var[2]."<br />";
echo $var[3]."<br />";

echo"=================<br>";
$colors = array("red", "blue","green");
foreach($colors as $v){
	echo $v."<br>";
}
echo"=================<br>";
$color1 = array("r" => "red", "b"=>"blue","g"=>"green");
foreach($color1 as $v){
	echo $v."<br>";
}
echo"=================<br>";
foreach($color1 as $k=>$v){
	echo $k." => ".$v."<br>";
}
*/

//Today's Lecture
$colors2D = array(array("red", "blue","green"),
		          array("black", "white","pink"),
		          array("brown", "orange","purple"));

foreach ($colors2D as $list)
{
	foreach ($list as $val)
	{
		echo $val.", ";
	}
	echo "<br>";
}

$EmplInfo = array(array("EID" =>1, "EName"=>"Ahmed", "Position"=>"Manager"),
		          array("EID" =>2, "EName"=>"Aya", "Position"=>"CEO"),
		          array("EID" =>3, "EName"=>"Omar", "Position"=>"Secretary"));

foreach ($EmplInfo as $v){
	foreach ($v as $val){
		echo $val." ";
	}
}
//Print the element of the array
//Homework



//Print the element of the array
//Homework

//functions for the arrays
$x = 5;
$colors = array("red", "blue","green1");

if(is_array($colors )) //check if $colors is an array variable
	echo "colors is an array<br>";
else
	echo "colors is not an array<br>";

$EmplInfo2 = array(
		"firstR" => array("EID" =>1, "EName"=>"Ahmed", "Position"=>"Manager"),
		"SecR" =>array("EID" =>2, "EName"=>"Aya", "Position"=>"CEO"),
		"ThirdR" =>array("EID" =>3, "EName"=>"Omar", "Position"=>"Secretary"));

$a = "green";
$num = array(1,2,3);
if(in_array("1", $num,true)) //check if the value is available the array or not"case sensitive"
	echo "The num is in the array<br>";
else
	echo "The num is not in the array<br>";

echo count($EmplInfo2);//check number of values in the array
?>
