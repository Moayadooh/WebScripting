<?php

	$date_time = new DateTime();
	
	/*echo "<pre>";
		print_r($date_time);
	echo "</pre>";*/
	
	echo $date_time->format('r');
	
	
	
	$date = getDate();
	//echo $date['mday']."th ".$date['month']." ".$date['year'];
	//print_r($date);

?>