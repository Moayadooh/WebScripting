
<html>
 <head>
  <title> Cars Traders - Sign up </title>
  <script type="text/javascript">
   function f()
   {
		if(parseInt(frm.first.value))
	{
		 alert("Please enter valid first name");
    }
		else if(frm.first.value=="")
	{
		 alert("Please enter first name");
    }
   }
   function l()
   {
		if(parseInt(frm.last.value))
	{
		 alert("Please enter valid last name");
    }
		else if(frm.last.value=="")
	{
		 alert("Please enter last name");
    }
   }
   function m()
   {

		if(frm.mobile.value=="")
	{
		 alert("Please enter mobile number");
    }
		else if(isNaN(frm.mobile.value))
	{
		 alert("Please enter valid mobile number");
	}
	    else if((frm.mobile.value).length > 8 || (frm.mobile.value).length < 8)
	{
          alert("Mobile number should consist of 8 digits");
	}
   }
   function p()
   {

		if(frm.pass.value=="")
	{
		 alert("Please enter password");
    }
   }
   function c()
   {

		if(frm.conf.value=="")
	{
		 alert("Please enter confirm password");
    }
   }
	</script>
  <link href="style.php" rel="stylesheet" type="text/css">
  <style>
  .con
  {
  width: 350px;
  margin: 50px auto;
  background: #ccccff;
  padding: 5px;
  }
  form
  {
  padding: 10px;
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
  input[type=submit]
  {
  width: 95%;
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
 <h2>Sign up</h2>
 
 <form name="frm" >
 <label>First Name</label><br>
 <input type = "text" name="FirstName"><br>
 <label>Last Name</label><br>
 <input type = "text" name="LastName"><br>
 <label>Mobile Number</label><br>
 <input type = "text" name="Mobile"><br>
 <label>Password</label><br>
 <input type = "password" name="Password"><br>
 <label>Confirm Password</label><br>
 <input type = "password" name="ConfirmPassword"><br>
 <input type ="radio" name="gender">Male
 <input type ="radio" name="gender">Female
 <br>
 <input type ="checkbox">I Agree To The Terms of Use
 <input type = "submit" value = "Create my account" onclick="f(),l(),m(),p(),c();">
 
 
 <p>Already have an account?<a href="account.php"> Login</a></p>
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
