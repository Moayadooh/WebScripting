<html>
<head>
<title>Database</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
<table>
    <tr>
        <td><label>id:</label></td>
        <td><input type = "text" name="id"></td>
    </tr>
    <tr>
        <td><label>Name:</label></td>
        <td><input type = "text" name="name"></td>
    </tr>
    <tr>
        <td><label>Age:</label></td>
        <td><input type = "text" name="age"></td>
    </tr>
    <tr>
    	<td><input type = "submit" name="Add" value="ADD"></td>
    	<td><input type = "submit" name="Delete" value="DELETE"></td>
    </tr>
    <tr>
    	<td><input type = "submit" name="Update" value="UPDATE"></td>
    	<td><input type = "submit" name="Display" value="DISPLAY"></td>
    </tr>
</table>
</form>
</body>
</html>

<?php 
    $link = mysqli_connect("localhost","root","root","db");
    if(!$link)
        die("Unable to connect".mysqli_error($link));
    if(isset($_POST['Add']))
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $query = "insert into users_data (id,name,age) values ('$id','$name','$age');";
        $result = mysqli_query($link, $query);
        if(!$result)
            die("Unable to add".mysqli_error($link));
        else
            echo "Data inserted successfully";
    }
    elseif(isset($_POST['Delete']))
    {
        $id = $_POST['id'];
        $query = "delete from users_data where id = '$id';";
        $result = mysqli_query($link, $query);
        if(!$result)
            die("Unable to delete".mysqli_error($link));
        else
            echo "Data deleted successfully";
    }
    elseif(isset($_POST['Update']))
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $query = "update users_data set name = '$name',age = '$age' where id = '$id';";
        $result = mysqli_query($link, $query);
        if(!$result)
            die("Unable to update".mysqli_error($link));
        else
            echo "Data updated successfully";
    }
    elseif(isset($_POST['Display']))
    {
        $query = "select * from users_data;";
        $result = mysqli_query($link, $query);
        if(!$result)
            die("Unable to display".mysqli_error($link));
        else
        {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "id: ".$row['id']."<br>";
                echo "name: ".$row['name']."<br>";
                echo "age: ".$row['age']."<br><br>";
            }
        }
    }
    mysqli_close($link);
?>