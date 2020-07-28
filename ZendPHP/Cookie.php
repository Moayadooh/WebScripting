<?php

	$name = "Fruit";
	$value = "apple";
	setcookie($name,$value,time()+900, "/");
	if (isset($_COOKIE[$name]))
		echo "Cookie $name is set";
	else 
		echo "Cookie is not set";

?>