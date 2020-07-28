<?php

	function MyFunction($name,$age)
	{
		return "Hi there my name is ".$name." I'm ".$age." years old";
	}
	
	$message = MyFunction("Moayad",22);
	echo $message;

?>