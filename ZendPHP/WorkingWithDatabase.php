<html>
<head>
<title> Working with Database</title>
</head>
<body>
<?php 
$host = "localhost";
$userName = "root";
$password = "root";

//1.
$con = mysql_connect($host, $userName, $password);
//2.
if(!$con)
	die('Unable to connect '.mysql_error());
//3.
mysql_select_db("employees", $con);

//4.
if(isset($_POST['Add'])){
	//insert a new record
	
	$id = $_POST['EID'];
	$name = $_POST['EName'];
	$salary = $_POST['Salary'];
	$bonus = $_POST['Bonus'];
	
	$sql = "Insert into emp (EID, EName, Salary, Bonus) values ('$id', '$name', '$salary', '$bonus')";
	
	//execute the query
	$result = mysql_query($sql, $con);
	
	if(! $result)
		die("Unable to add ".mysql_error());
	else 
		echo "Record inserted successfully<br>";
}
elseif (isset($_POST['Print'])){
	//Print all information
	$sql = "Select * from emp";
	$result = mysql_query($sql, $con);
	
	if(! $result)
		die("Unable to retrieve records ".mysql_error());
	else{
		while($row = mysql_fetch_assoc($result)){
			echo "ID: ".$row['EID']."<br>";
			echo "Name ".$row['EName']."<br>";
			echo "Salary: ".$row['Salary']."<br>";
			echo "Bonus: ".$row['Bonus']."<br>";
			$NSalary = $row['Salary'] + ($row['Salary'] *$row['Bonus']/100);
			echo "New Salary : ".$NSalary."<br>";
		}
		echo "<br>";
	}
}
elseif (isset($_POST['Delete'])){
	//Delete a record
	$id = $_POST['EID'];
	$sql = "Delete from emp where EID = '$id'";
	
	$result = mysql_query($sql, $con);
	if(! $result)
		die("Unable to delete ".mysql_error());
	else
		echo "Record deleted successfully<br>";
}
elseif (isset($_POST['Update'])){
	//Update a record
	$id = $_POST['EID'];
	$name = $_POST['EName'];

	$sql = "Update emp set EName = '$name' where EID = '$id'";
	
	$result = mysql_query($sql, $con);
	if(! $result)
		die("Unable to update ".mysql_error());
		else
			echo "Record updated successfully<br>";
}
else{

?>
<form method = "Post" action="<?php echo $_SERVER['PHP_SELF']?>">
	<table>
		<tr>
			<td>Employee ID</td>
			<td><input type="text" name="EID" id="EID"></td>
		</tr>
		<tr>
			<td>Employee Name</td>
			<td><input type="text" name="EName" id="EName"></td>
		</tr>
		<tr>
			<td>Employee Salary</td>
			<td><input type="text" name="Salary" id="Salary"></td>
		</tr>
		<tr>
			<td>Bonus</td>
			<td><input type="text" name="Bonus" id="Bonus"></td>
		</tr>
		<tr>
			<td><input type = "submit" name="Add" value="Add Employee"></td>
			<td><input type = "submit" name="Print" value="Print Report"></td>
		</tr>
		<tr>
			<td><input type = "submit" name="Delete" value="Delete"></td>
			<td><input type = "submit" name="Update" value="Update"></td>
		</tr>
	</table>
</form>
<?php
}
//5.
mysql_close($con);
?>

</body>
</html>
