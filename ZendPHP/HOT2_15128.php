<html>
<head>
<title>Dental Clinic System</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
<table>
    <tr><th>Dental Clinic System</th></tr><tr>
    <tr>
        <td><label>Patient ID</label></td>
        <td><input type="text" name="pid"></td>
    </tr>
    <tr>
        <td><label>Patient Name</label></td>
        <td><input type="text" name="pname"></td>
    </tr>
    <tr>
        <td><label>Cleaning Charge</label></td>
        <td><input type="text" name="clcharge"></td>
    </tr>
    <tr>
        <td><label>X-Ray Charge</label></td>
        <td><input type="text" name="xrcharge"></td>
    </tr>
    <tr>
        <td><input type="submit" name="add" value="Add Patient"></td>
        <td><input type="submit" name="delete" value="Delete Patient"></td>
    </tr>
    <tr>
        <td><input type="submit" name="print" value="Print Report"></td>
        <td><input type="submit" name="update" value="Update Patient"></td>
    </tr>
</table>
</form>
</body>
</html>
<?php 
    //Connect to the database
    $link = mysqli_connect("localhost","root","root","clinic");
    if(!$link)
        die("unable to connect".mysqli_error($link));
    if(isset($_POST['add']))
    {
        //Insert the record to the database
        $id = $_POST['pid'];
        $name = $_POST['pname'];
        $clcharge = $_POST['clcharge'];
        $xrcharge = $_POST['xrcharge'];
        $query = "insert into patients (PID,PName,Cleaning,xRay) values ('$id','$name','$clcharge','$xrcharge');";
        $result = mysqli_query($link, $query);
        if(!$result)
            die("Data not inserted".mysqli_error($link));
        else 
            echo "Data inserted successfully";
    }
    elseif(isset($_POST['delete']))
    {
        //Delete the record from database based on patienet ID
        $id = $_POST['pid'];
        $query = "delete from patients where PID = '$id';";
        $result = mysqli_query($link, $query);
        if(!$result)
            die("Data not deleted".mysqli_error($link));
        else
            echo "Data deleted successfully";
    }
    elseif(isset($_POST['update']))
    {
        //Update the record from database based on patienet ID
        $id = $_POST['pid'];
        $name = $_POST['pname'];
        $clcharge = $_POST['clcharge'];
        $xrcharge = $_POST['xrcharge'];
        $query = "update patients set PName='$name',Cleaning='$clcharge',xRay='$xrcharge' where PID = '$id';";
        $result = mysqli_query($link, $query);
        if(!$result)
            die("Data not updated".mysqli_error($link));
        else
            echo "Data updated successfully";
    }
    elseif(isset($_POST['print']))
    {
        //Print all the record from database
        $query = "select * from patients;";
        $result = mysqli_query($link, $query);
        if(!$result)
            die("Some thing went wrong".mysqli_error($link));
        else
        {
            while ($row = mysqli_fetch_assoc($result))
            {
                echo "<br>Patient ID: ".$row['PID']."<br>";
                echo "Patient Name: ".$row['PName']."<br>";
                echo "Cleaning Charge: ".$row['Cleaning']."<br>";
                echo "X-Ray Charge: ".$row['xRay']."<br><br>";
                $totalCharge = $row['Cleaning'] + $row['xRay']; //Calaculate total charge
                echo "Total Charge: ".$totalCharge."<br>";
                echo "==============================================================";
            }
        }
    }
    //Close database connection
    mysqli_close($link);
?>