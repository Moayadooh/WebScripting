<?php

	//This is associative array represent Figure 1 "Name of fruits and number of boxes(Count)
	$fruits = array(
			array("Name"=>"Apple","Count"=>10),
			array("Name"=>"Orange","Count"=>12),
			array("Name"=>"Apple","Count"=>21),
			array("Name"=>"Pineapple","Count"=>17),
			array("Name"=>"Grape","Count"=>10)
	);
	
	$fruit_name = "AppLE"; //Fruit name
	$fruit_name = strtolower($fruit_name); //Convert all letters to lower case form
	$fruit_name[0] = strtoupper($fruit_name[0]); //Convert first letter to upper case
	$total_boxes = 0; //initialize number of boxes
	$isAvailable = false; //Assume the fruite is not available before start searching
	
	//Search for the fruit name and calculate number of boxes using foreach
	foreach ($fruits as $key=>$value)
	{
		//Check if entered fruit name is match with any available fruit name
		if ($value["Name"]==$fruit_name)
		{
			$total_boxes += $value["Count"]; //Calculate number of boxes
			$isAvailable = true; //Tell that the fruit is available
		}
	}
	
	$fruit_name = strtoupper($fruit_name); //Convert fruit name to upper case
	//Check if boolean variable value "isAvailable" is true
	if ($isAvailable)
		echo "There are $total_boxes boxes of $fruit_name."; //Print fruit name and number of boxes "represent figure 2"
	else 
		echo "The selected fruit does not exist in the store!"; //Print that selected fruit does not exist "represent figure 3"

?>