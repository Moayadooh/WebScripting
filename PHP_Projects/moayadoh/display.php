
<html>
 <head>
  <title> Cars Trading - Display Users Details </title>
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
  
  


table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: center;
    padding: 5px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
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
 

 
 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 <h2 align="center">Users and Car Details</h2>
 
 <?php
    /* Connecting, selecting database */
    $link = mysql_connect("localhost", "root","root")
        or die("Could not connect");
    //echo "Connected successfully";
    mysql_select_db("db") or die("Could not select database");

    /* Performing SQL query */
    $query = "SELECT * FROM car";
    $result = mysql_query($query) or die("Query failed");

    /* Printing results in HTML */


	echo "<table >\n";
	echo "<tr>\n";
	echo "<th>Civil ID</th>\n";
	echo "<th>Owner name</th>\n";
	echo "<th>Type of car</th>\n";
	echo "<th>Model of car</th>";
	echo "<th>Color of car</th>\n";
	echo "<th>Price of car</th>\n";
	echo "<th>Mobile No</th>\n";

	echo "<tr>\n"; 
    
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
        echo "\t<tr>\n";
        foreach ($line as $col_value) {
            echo "\t\t<td>$col_value</td>\n";
        }
        echo "\t</tr>\n";
    }
    echo "</table>\n";

    /* Free resultset */
    mysql_free_result($result);

    /* Closing connection */
    mysql_close($link);
?>
<br>
<input type = "submit" value="Back" style="margin-left:5px;" onclick= "window.location.href='manage_account.php'">
 
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
