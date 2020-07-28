<html>
<head>
<title> MUSCAT INTERNATIONAL AIRPORT </title>
<link href="style.php"rel="stylesheet"type="text/css">
  <script>
  function dis()
  {
  if(fr.te.value=="admin" && fr.pass.value=="admin")
  {
  alert("Login Successful");
  }
  else
  {
  alert("Wrong user name or password");
  }
  }
</script>
  <style>
  .con
  {
  width: 600px;
  margin: 50px auto;
  background: #BFD8D8;
  padding: 10px;
  }
  form p
  {
  text-align: center;
  }
  h2
  {
  text-align: center;
  background:  #3299CC;
  color: white;
  padding: 3px;
  border-radius:7px;
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
  width: 99%;
  }
  input[type=reset],[type=submit]
  {
  width: 45%;
  background: #007FFF;
  color: white;
  font-size: 20px;
  font-weight: bold;
  cursor: pointer;
  }
  input[type=reset]:hover
  {
  background:  #3299CC;
  }
  input[type=submit]:hover
  {
  background:  #3299CC;
  }
  </style>
 </head>

 <body>
 <div class = "logo">
 <img src = "logo.jpg" >
</div>
 <h1>Muscat international airport</h1>
  <ul class = "menus">
 <li><a href="Home.php" >Home</a></li>
 <li><a href="login.php" style="border: 3px solid;border-color:#3232CC">login</a></li>
 <li><a href="Flight_information.php">Flight_information</a></li>
 <li><a href="Airport_services.php">Airport_services</a></li>
 <li><a href="Site_Map.php">Site_Map</a></li>
 <li><a href="help.php">Help</a></li>
 </ul>
<br>

          <div class="con">
          <h2>Login</h2>
          <form name="fr">
          <label>User name</label><br>
          <input type = "text" name="te">
          <br>
          <label>Password</label><br>
          <input type = "password" name="pass">
          <br><br>
          <input type = "reset" value = "Reset">
          <input type = "submit" value = "submit" onclick="dis();"><br><br>
          <p>Don't have an account?<a href="Sign up.html"> Sign up</a><br>
		  </form>
		  </div>


<br>
		 <div class="symbol">
 <img src="facebook.png" width="50px" height="50px">
 <img src="youtube.png"width="50px" height="50px" >
 <img src="twitter.png"width="50px" height="50px">
 <img src="googleplus.png"width="50px" height="50px">
 </div>
 <div id="bttmbar">Copyright &copy; Oman airport.com  All rights reserved.</div>


    </body>

</html>

    