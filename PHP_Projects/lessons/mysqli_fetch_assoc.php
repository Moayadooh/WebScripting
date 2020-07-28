<?php

$link = mysqli_connect("localhost","root","root","db");

$result = mysqli_query($link, "select * from record");

$rows = mysqli_fetch_assoc($result); //better in performance rather than mysqli_fetch_array()

if (!$rows) {
    echo "No results";
}
else {
    do {
        echo sprintf("%s %s <br/>",$rows['username'],$rows['password']);
    }while ($rows = mysqli_fetch_assoc($result));
}
mysqli_free_result($result);

?>