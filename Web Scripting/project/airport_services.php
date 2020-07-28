<html>
 <head>
  <title> Muscat international airport: Airport services page</title>
  <link href="style.php" rel="stylesheet" type="text/css">
  <script type="text/javascript">
function f()
{
	if(parseInt(frm.from.value))
	{
		 alert("please enter valid name");
	}
	   else if(frm.to.value=="")
    {  
		alert("please enter name");
		}
      }
function t()
{
	if(parseInt(frm.to.value))
	{
		 alert("please enter valid name");
	}
	   else if(frm.to.value=="")
    {  
		alert("please enter name");
		}
      }
	  </script>
</head>
 <style>
div table
{
float:left;
}
  .con
  {
  width: 660px;
  margin: 10px auto;
  background:  #BFD8D8;
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
  background: #007FFF;
  color: white;
  padding: 5px;

  }
  input
  {
  padding: 10px;
  margin: 5px;
  border-radius: 5px;
  border: none;
  }
  input[type=text]
  {
  width: 95%;
  }
  input[type=submit]
  {
  width: 95%;
  background:#007FFF;
  color: white;
  font-size: 20px;
  font-weight: bold;
  cursor: pointer;
  }
  input[type=submit]:hover
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
 <li><a href="Home.php">Home</a></li>
 <li><a href="login.php">login</a></li>
 <li><a href="Flight_information.php">Flight_information</a></li>
 <li><a href="Airport_services.php" style="border: 3px solid;border-color:#3232CC">Airport_services</a></li>
 <li><a href="Site_Map.php">Site Map</a></li>
 <li><a href="help.php">Help</a></li>
 </ul>
<br><br><br>

 <div class="con">
 <h2>Book a flight</h2>
<form name="frm">
 <label>From</label><br>
 <input type = "text" name="from"><br>
 <label>To</label><br>
 <input type = "text" name="to"><br>
  <br>
 <input type ="radio" name="gender">Return
 <input type ="radio" name="gender">One way
<input type ="radio" name="gender">Multi-City
<br>

<label>Departing Date :</label><br>
<select  name = "departing Date">
<option selected = "selected">Day</option>
<option>saturday</option>
<option>sunday</option>
<option>Monday</option>
<option>Tuesday</option>
<option>Wednesday</option>
<option>Thursday</option>
<option>Friday</option>
 </select>

<select  name = "departing Date">
<option selected = "selected">month</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
 </select>


<select  name = "departing Date">
<option selected = "selected">year</option>
<option>2001</option>
<option>2002</option>
<option>2003</option>
<option>2004</option>
<option>2005</option>
<option>2006</option>
<option>2007</option>
<option>2008</option>
<option>2009</option>
<option>2010</option>
<option>2011</option>
<option>2012</option>
 </select><br>



<label>Return Date :</label><br>
<select  name = "Return Date">
<option selected = "selected">Day</option>
<option>saturday</option>
<option>sunday</option>
<option>Monday</option>
<option>Tuesday</option>
<option>Wednesday</option>
<option>Thursday</option>
<option>Friday</option>
 </select>

<select  name = "departing Date">
<option selected = "selected">month </option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
 </select>


<select  name = "departing Date">
<option selected = "selected">year</option>
<option>2001</option>
<option>2002</option>
<option>2003</option>
<option>2004</option>
<option>2005</option>
<option>2006</option>
<option>2007</option>
<option>2008</option>
<option>2009</option>
<option>2010</option>
<option>2011</option>
<option>2012</option>
 </select><br>
<label>Cabin Class :</label><br>
 <input type ="radio" name="gender">first
 <input type ="radio" name="gender">Business
<input type ="radio" name="gender">Economy

<br>
<label>Passengers :</label><br>
 <input type ="checkbox">Adult
 <input type ="checkbox">Child
 <input type ="checkbox">Infant
 <br>

<label>Payment method :</label><br>
 <input type ="radio" name="gender">Currency
 <input type ="radio" name="gender">Miles
 <br><br>
 <input type = "submit" value = "Find a flight"onclick="f(),t()">
 <a href= "Add flight details.php"style="color:blue;margin-left:30px;"> Add flight details</a>
 <a href="Delete flight details.php"style="color:blue;margin-left:30px;">Delete flight details</a>
 <a href="update flight details.php"style="color:blue;margin-left:30px;">Update flight details</a>
 </form>
 </div>
<h2 align="left">Our services</h2>
<br>
 <div>
 <table border="1">
 <tr>
 <td><img src = "holiday.jpg" height="150px"width="290px"></td>
 </tr>
 <tr>
 <td><h2 align="left">Holidays</h2></td>
</tr>

</table>
</div>

 <div>
 <table border="1">
 <tr>
 <td><img src = "images.jpg" height="150px"width="290px"></td>
 </tr>
 <tr>
 <td><h2 align="left">Catering</h2></td>
 </tr>
 
 </table>
 </div>

 <div>
 <table border="1">
 <tr>
 <td><img src = "cargo.jpg" height="150px"width="290px"></td>
 </tr>
 <tr>
 <td><h2 align="left">Cargo</h2></td>
 </tr>
 
</table>
</div>


 <table border="1">
 <tr>
 <td><img src = "images (1).jpg" height="150px"width="290px"></td>
 </tr>
 <tr>
 <td><h2 align="left">Engineering</h2></td>
 </tr>
 
 </table>

<br><br>
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
    

    
