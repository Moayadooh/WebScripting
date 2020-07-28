<html>
<head>
<title> MUSCAT INTERNATIONAL AIRPORT : Delete flight details</title>
 <link href="style.php" rel="stylesheet" type="text/css">

 </head>
 
<style>
div table
{
float:left;
}
  .con
  {
  width: 500px;
  margin: 10px auto;
  background:  #BFD8D8;
  padding: 5px;
  }
  form
  {
  padding: 5px;
  }
  form p
  {
  text-align: center;
  }
  h2
  {
  text-align: center;
  background: #007FFF;
  color: white;
  padding: 5px;

  }
  input
  {
  padding: 10px;
  margin: 10px;
  border-radius: 5px;
  border: none;
  }
  input[type=text]
  {
  width: 80%;
  }
  input[type=Reset]
  {
  width: 95%;
  background:#007FFF;
  color: white;
  font-size: 20px;
  font-weight: bold;
  cursor: pointer;
  }
  input[type=Reset]:hover
  {
  background: #3299CC;
  }
  </style>
  <body>
 <div class = "logo">
 <img src = "logo.jpg" >
</div>
 <h1>Muscat international airport</h1>
  <ul class = "menus">
 <li><a href="Home.php" >Home</a></li>
 <li><a href="login.php">login</a></li>
 <li><a href="Flight_information.php">Flight_information</a></li>
 <li><a href="Airport_services.php">Airport_services</a></li>
 <li><a href="Site_Map.php">Site_Map</a></li>
 <li><a href="help.php">Help</a></li>
 </ul>
 <br><br></br>
 
 <?php

/* Connecting, selecting database */
$link = mysql_connect("localhost", "root","root")
or die("Could not connect");
echo "<br>";
mysql_select_db("db") or die("Could not select database");



// define variables and set to empty values
$id= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
    $id = test_input($_POST["id"]);

  }




function test_input($data) {
	$data = trim($data);
	
	return $data;
}

?>

 <div class="con">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 <h2>FLIGHT_DETAILS</h2>
 <label style="color:none;margin-left:30px;">FLIGHT_ID</label><br>
 <input style="color:none;margin-left:30px;"type = "text" name="id"><br>
<br>
<input type = "submit" value = "Delete flight details">
 <?php
 $query = "delete from flight  where id='$id'";
	$result = mysql_query($query);
 ?>
</form>
 </div>
<br>
<hr>
<div class="symbol">
 <img src="facebook.png" width="50px" height="50px">
 <img src="youtube.png"width="50px" height="50px" >
 <img src="twitter.png"width="50px" height="50px">
 <img src="googleplus.png"width="50px" height="50px">
 </div>
 <div id="bttmbar">Copyright &copy; Oman airport.com  All rights reserved.</div>
</body>
</html>