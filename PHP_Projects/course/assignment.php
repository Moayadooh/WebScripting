<?php

	$select = 5;
	$arr = ["iPhone 7","Galaxy S9","iPhone 8","Galaxy S10","HP"];
	switch($select)
	{
		case 1:
		echo $arr[0];
		break;
		
		case 2:
		echo $arr[1];
		break;
		
		case 3:
		echo $arr[2];
		break;
		
		case 4:
		echo $arr[3];
		break;
		
		case 5:
		echo $arr[4];
		break;
		
		default:
		echo "Invalid selection";
		break;
	}

?>