
<html>
 <head>
  <title>Cars Traders - View Account</title>
  <link href="style.php" rel="stylesheet" type="text/css">
  <style>
  .con
  {
  width: 350px;
  margin: 50px auto;
  background: #ccccff;
  padding: 5px;
  }
  form p
  {
  text-align: center;
  }
  h2
  {
  text-align: center;
  background: #0074d9;
  color: white;
  padding: 5px;
  border-radius: 10px;
  }
  input
  {
  padding: 10px;
  margin: 5px;
  border-radius: 5px;
  border: none;
  }
  input[type=text],[type=password]
  {
  width: 95%;
  }
  input[type=reset],[type=submit]
  {
  width: 45%;
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
  input[type=submit]:hover
  {
  background: #3300ff;
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

 <div class="con">
 <h2>Login</h2>
 <form name="frm">
 <label>User name</label><br>
 <input type = "text" name="te">
 <br>
 <label>Password</label><br>
 <input type = "password" name="pass">
 <br>
 <input type = "reset" value = "Reset">
 <input type = "submit" value = "Login" onclick="window.location.href='manage_account.php'">
 <p>Don't have an account?<a href="sign_up.php"> Sign up</a>
 </form>
 </div>

 <div class="symbol">
 <img src="facebook.png">
 <img src="youtube.png">
 <img src="twitter.png">
 <img src="googleplus.png">
 </div>

 <div id="bttmbar">Copyright &copy; 2018 Cars.com All rights reserved.</div>

 </body>
</html>
