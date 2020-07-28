<?php

$db = new mysqli("localhost","root","root","db");

$query = mysqli_query($db, "select * from users_data");
while ($result = mysqli_fetch_array($query)){
    echo $result['id']."<br>";
    echo $result[1]."<br>";
    echo $result['email']."<br>";
    echo $result[3]."<br><br>";
}

?>