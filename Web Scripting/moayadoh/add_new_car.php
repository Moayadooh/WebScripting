
<html>
 <head>
  <title> Cars Trading - Add New Car </title>
  <link href="style.php" rel="stylesheet" type="text/css">
 </head>
  <style>
  form
  {
  width:550px;
  margin:50px auto;
  }
  input
  {
  padding: 5px;
  margin: 0px;
  margin-bottom:5px;
  border-radius: 5px;
  border: none;
  }
  input[type=submit]
  {
  background: #0074d9;
  color: white;
  font-size: 18px;
  font-weight: bold;
  cursor: pointer;
  }
  input[type=submit]:hover
  {
  background: #3300ff;
  }
  input[type=reset]
  {
  background: #0074d9;
  color: white;
  font-size: 18px;
  font-weight: bold;
  cursor: pointer;
  }
  input[type=reset]:hover
  {
  background: #3300ff;
  }
 </style>
 <body>

 <div class = "logo">
 <img src = "cars.png">
 </div>

 <h1>Cars Traders</h1>

 <ul class = "box">
 <li><a href="home.php">Home</a></li>
 <li><a href="view_cars.php">View Cars</a></li>
 <li><a href="account.php" style="border: 3px solid;border-color:#ccccff">View Account</a></li>
 <li><a href="site_map.php">Site Map</a></li>
 <li><a href="contact_us.php">Contact us</a></li>
 <li><a href="help.php">Help</a></li>
 </ul>

 <br><br><br>
 <hr>

 <h4 style="margin-left:92%">(<a href="account.php"> Log out</a>)</h4>
 
 <?php

/* Connecting, selecting database */
$link = mysql_connect("localhost", "root","root")
or die("Could not connect");

mysql_select_db("db") or die("Could not select database");


// define variables and set to empty values

$id = $type = $model= $color = $price = $owner = $mobile =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
     $id = test_input($_POST["id"]);
    
     $type = test_input($_POST["type"]);
     
     $model = test_input($_POST["model"]);
     
     $color = test_input($_POST["color"]);
     
     $price = test_input($_POST["price"]);
     
     $owner = test_input($_POST["owner"]);
     
     $mobile = test_input($_POST["mobile"]);
  }




function test_input($data) {
	$data = trim($data);
	
	return $data;
}

?>
 
 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 <h2 align="center">Add Car Details</h2>
 <label>Civil ID:</label>
 <input type = "text" name=id style="margin-left:103px;"><br>
 <label>Owner name:</label>
 <input type = "text" name="owner" style="margin-left:71px;"><br>
 <label>Type of car:</label>
 <input type = "text" name="type" style="margin-left:80px;"><br>
 <label>Model of car:</label>
 <input type = "text" name="model" style="margin-left:70px;"><br>
 <label>Color of car:</label>
 <input type = "text" name="color" style="margin-left:75px;"><br>
 <label>Price of car:</label>
 <input type = "text" name="price" style="margin-left:80px;"><br>
 <label>Mobile No:</label>
 <input type = "text" name="mobile" style="margin-left:84px;"><br>
 <br>
 <input type = "submit" value="Add" style="margin-left:80px;">
 <input type = "reset" value="Reset" style="margin-left:40px;">
 <input type = "submit" value="Back" style="margin-left:80px;" onclick= "window.location.href='manage_account.php'">
  <?php
  $query = "INSERT into car VALUES('$id','$owner','$model', '$color', '$price','$type','$mobile')";
	$result = mysql_query($query);
	
 ?>
 
 </form>
 <br><br>


 <div class="symbol">
 <img src="facebook.png">
 <img src="youtube.png">
 <img src="twitter.png">
 <img src="googleplus.png">
 </div>

 <div id="bttmbar">Copyright &copy; 2018 Cars.com All rights reserved.</div>

 </body>
</html>
