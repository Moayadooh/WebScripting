
<html>
 <head>
  <title> Cars Trading - Manage Account </title>
  <link href="style.php" rel="stylesheet" type="text/css">
  <style>
  div table
  {
  width:20%;
  float:left;
  }
  div table td img
  {
  width:100%;
  }
  input
  {
  padding: 5px;
  margin: 0px;
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
  .btn input
  {
margin-left:100px;
}
  </style>
 </head>
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
 <form>

 <br><br><br>
 <div class="btn">
 <input type ="submit" value="Add User Details" onclick= "window.location.href='add_new_car.php'">
 <input type ="submit" value="Update User Details" onclick= "window.location.href='update.php'">
 <input type ="submit" value="Delete User Details" onclick= "window.location.href='Delete.php'">
 <input type ="submit" value="Display Users Details" onclick= "window.location.href='display.php'">
 </div>
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
