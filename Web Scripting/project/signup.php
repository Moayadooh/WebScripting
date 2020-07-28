<html>
 <head>
  <title> Muscat international airport - Sign up </title>
  <link href="style.php" rel="stylesheet" type="text/css">
  <script type="text/javascript">
function f()
{
	if(parseInt(frm.first.value))
	{
		 alert("please enter valid first name");
	}
	   else if(frm.first.value=="")
    {  
		alert("please enter first name");
		}
      }
function l()
{
	if(parseInt(frm.last.value))
	{
		 alert("please enter valid last name");
	}
	   else if(frm.first.value=="")
    {  
		alert("please last name");
		}
      }
function m()
{
	if(frm .mobile.value=="")
	{
		 alert("please enter mobile number");
	 }
		 else if(isNaN(frm.mobile.value))
	{
		alert("please enter valid mobile number");
	}
	   else if((frm.mobile.value).length > 8 || (frm.mobile.value).length < 8)
    {  
		alert("mobile number should consist of 8 digits");
		}
      }
function p()
{
	if(frm.pass.value=="");
	{
		 alert("please enter password");
	}
}
function e()
{
	if(frm.email.value=="");
	{
		 alert("please enter email");
	}
}
  </script>
  <style>
  .con
  {
   width: 600px;
  margin: 50px auto;
  background: #BFD8D8;
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
  background: #3299CC;
  color: white;
  padding: 5px;
  border-radius: 11px;
  }
  input
  {
  padding: 10px;
  margin: 5px;
  border-radius: 11px;
  border: none;
  }
  input[type=text],[type=password]
  {
  width: 95%;
  }
  input[type=text],[type=Email]
  {
  width: 95%;
  }
  input[type=submit]
  {
  width: 95%;
  background: #3299CC;
  color: white;
  font-size: 18px;
  font-weight: bold;
  cursor: pointer;
  }
  input[type=submit]:hover
  {
  background:  #007FFF;
  }
  </style>
 </head>
 <body>

 <div class = "logo">
 <img src = "logo.jpg" >
</div>
 <h1>Muscat international airport</h1>
  <ul class = "menus">
 <li><a href="Home.php" style="border: 3px solid;border-color:#3232CC">Home</a></li>
 <li><a href="login.php">login</a></li>
 <li><a href="Flight_information.php">Flight_information</a></li>
 <li><a href="Airport_services.php">Airport_services</a></li>
 <li><a href="Site_Map.php">Site_Map</a></li>
 <li><a href="help.php">Help</a></li>
 </ul>

 <br><br><br>
 <hr>

 <div class="con">
 <h2>Sign up</h2>
 <form name="frm">
 <label>First Name</label><br>
 <input type = "text" name="first"><br>
 <label>Last Name</label><br>
 <input type = "text"name="last"><br>
 <label>Mobile Number</label><br>
 <input type = "text" name="mobile"><br>
 <label>Password</label><br>
 <input type = "password"name="pass"><br>
 <label>Email</label><br>
 <input type = "Email"name="email"><br>
 <label>Gender :</label>
 <input type ="radio" name="gender">Male
 <input type ="radio" name="gender">Female
 <br><br>
<input type ="checkbox">I Agree To The Terms of Use<br><br>
 <input type = "submit" value = "Create my account" onclick="f(),l(),m(),p(),e()"><br>
<p>Already have an account?<a href="login.php"> login</a></p><br>
 </form>
 </div>
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
    