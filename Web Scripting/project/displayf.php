<html>
<head>
<title> MUSCAT INTERNATIONAL AIRPORT : Display flight details</title>
 <link href="style.php" rel="stylesheet" type="text/css">

 </head>
<style>
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
 <li><a href="Home.php" >Home</a></li>
 <li><a href="login.php">login</a></li>
 <li><a href="Flight_information.php">Flight_information</a></li>
 <li><a href="Airport_services.php">Airport_services</a></li>
 <li><a href="Site_Map.php">Site_Map</a></li>
 <li><a href="help.php">Help</a></li>
 </ul>
 <br><br></br>

 <div class="con">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 <h2>FLIGHT_DETAILS</h2>

<br>


 <?php
    /* Connecting, selecting database */
    $link = mysql_connect("localhost", "root","root")
        or die("Could not connect");
    //echo "Connected successfully";
    mysql_select_db("db") or die("Could not select database");

    /* Performing SQL query */
    $query = "SELECT * FROM flight";
    $result = mysql_query($query) or die("Query failed");

    /* Printing results in HTML */

	echo "<table >\n";
	echo "<tr>\n";
	echo "<th>id</th>\n";
	echo "<th>name</th>\n";
	echo "<th>department</th>\n";
	echo "<th>flight_class</th>";
	echo "<th>flight_charges</th>\n";
	echo "<th>seats</th>\n";
	echo "<th>destination</th>\n";
	echo "<th>arrival</th>\n";

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
    

    