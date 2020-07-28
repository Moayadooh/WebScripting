
<html>
 <head>
  <title> Cars Trading - Delete User Details </title>
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
$id = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = test_input($_POST["id"]);

  }




function test_input($data) {
	$data = trim($data);
	
	return $data;
}

?>
 
 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 <h2 align="center">Delete User Details</h2>
 <p align = "center">Enter civil ID of the owner you want to delete :</p>
 <br>
 <input type = "text" name="id" style="margin-left:170px">
 <input type = "submit" value="Delete"><br><br>
 <input type = "submit" value="Back" style="margin-left:170px;" onclick= "window.location.href='manage_account.php'">
 <br><br>
  <?php  
  $query = "delete from car where id = '$id'";
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