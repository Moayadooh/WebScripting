<?php

	return include 'file2.php';
	//return "Hi<br>";

	//echo "Hello <br>"; //this statement will not be executed because it is after return
	
	function maximum($n1, $n2)
	{
		if ($n1 > $n2)
			return $n1;
		else if ($n1 < $n2)
			return $n2;
		else 
			return "Both values are equal";
	}

?>