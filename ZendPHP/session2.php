<?php

	session_start();
	
	if(isset($_SESSION['userName']))
		echo 'UserName: '.$_SESSION['userName'].'<br>';
	
	if(isset($_SESSION['major']))
		echo 'Major: '.$_SESSION['major'].'<br>';
	
	if(isset($_SESSION['num']))
	{
		echo $_SESSION['num'].'<br>';
		$_SESSION['num'] += 1;
	}
		

?>