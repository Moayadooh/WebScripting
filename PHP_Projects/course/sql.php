<?php

	$conn = mysqli_connect("localhost","root","root","users");
	
	/*if($conn)
		echo "Connected";*/
	
	//$sql = "SELECT * FROM users_data where username = 'Moayad' and password = '101'";
	//$sql = "SELECT * FROM users_data where username like '%ad'"; //last letters only
	/*$sql = "insert into users_data(username,email,password)";
	$sql .= "values('Mohammed','mohammed@gmail.com','741')";*/
	//$sql = "update users_data set email='moayadsalim97@gmail.com', password='101' where id = 1";
	//$sql = "delete from users_data where id = 3";
	//$sql = "delete from users_data"; //empty the tables
	$sql = "drop table users_data"; //delete the tables
	
	$result = mysqli_query($conn,$sql); //execute the query
	
	if($result)
		echo "Table deleted successfuly";
	
	/*while($row = mysqli_fetch_assoc($result)){
	$uname = $row['username'];
	echo $uname."<br />";
	}*/

?>