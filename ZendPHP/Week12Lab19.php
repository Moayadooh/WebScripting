<html>
<head>
<title>Working With Database</title>
</head>

<style>
#wid{
		width: 120;
	}
</style>

<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
	<table>
		<tr>
			<td><label>Employee ID</label></td>
			<td><input type = "text" name="EID" id="EID"></td>
		</tr>
		<tr>
			<td><label>Employee Name</label></td>
			<td><input type = "text" name="EName" id="EName"></td>
		</tr>
		<tr>
			<td><label>Employee Salary</label></td>
			<td><input type = "text" name="ESalary" id="ESalary"></td>
		</tr>
		<tr>
			<td><label>Bonus</label></td>
			<td><input type = "text" name="EBonus" id="EBonus"></td>
		</tr>
		<tr>
			<td><input type = "submit" value="Add Employee" name="Add" id="wid"></td>
			<td><input type = "submit" value="Print Employee" name="Print" id="wid"></td>
		</tr>
		<tr>
			<td><input type = "submit" value="Update Employee" name="Update" id="wid"></td>
			<td><input type = "submit" value="Delete Employee" name="Delete" id="wid"></td>
		</tr>
	</table>
</form>
</body>
</html>

<?php 
	
	$con = mysql_connect("localhost","root","root");
	if (!$con)
		die('Unable to connect'.mysql_error());
	mysql_select_db("employees");
	if (isset($_POST['Add']))
	{
		//Add Record
		$id = $_POST['EID'];
		$name = $_POST['EName'];
		$salary = $_POST['ESalary'];
		$bonus = $_POST['EBonus'];
		$sql = "insert into emp(EID,EName,Salary,Bonus)  values('$id','$name','$salary','$bonus')";
		$result = mysql_query($sql,$con);
		if (!$result)
			die('Unable to connect'.mysql_error());
		else 
			echo "Record inserted successfuly<br>";
	}
	elseif (isset($_POST['Print']))
	{
		//Print all infromation
		$sql = "select * from emp";
		$result = mysql_query($sql,$con);
		if (!$result)
			die('Unable to print'.mysql_error());
		
		echo "<table border = 1>";
		echo "<tr>";
		echo "<th>ID</th>";
		echo "<th>Name</th>";
		echo "<th>Salary</th>";
		echo "<th>Bonus</th>";
		echo "<th>New Salary</th>";
		echo "</tr>";
		while ($row = mysql_fetch_assoc($result))
		{
			echo "<tr>";
			echo "<td>".$row['EID']."</td>";
			echo "<td>".$row['EName']."</td>";
			echo "<td>".$row['Salary']."</td>";
			echo "<td>".$row['Bonus']."</td>";
			$newSalary = $row['Salary'] + ($row['Salary'] * $row['Bonus']/100);
			echo "<td>$newSalary</td>";
			echo "</tr>";
		}
		echo "</table>";
	}
	elseif (isset($_POST['Update']))
	{
		//Update Record
		$id = $_POST['EID'];
		$name = $_POST['EName'];
		$salary = $_POST['ESalary'];
		$bonus = $_POST['EBonus'];
		
		$sql = "update emp set EName='$name', Salary='$salary', Bonus='$bonus' where EID = '$id'";
		$result = mysql_query($sql,$con);
		if (!$result)
			die('Unable to update'.mysql_error());
		else
			echo "Record updated successfuly<br>";
	}
	elseif (isset($_POST['Delete']))
	{
		//Delete Record
		$id = $_POST['EID'];
		
		$sql = "delete from emp where EID = '$id'";
		$result = mysql_query($sql,$con);
		if (!$result)
			die('Unable to delete'.mysql_error());
		else
			echo "Record deleted successfuly<br>";
	}
	mysql_close($con);
	
?>