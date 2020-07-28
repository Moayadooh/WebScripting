<?php

$link = mysqli_connect("localhost","root","root") or die("could not connect");
print "Connected successfuly<br>";
mysqli_select_db($link,"db") or die("could not select database");

?>