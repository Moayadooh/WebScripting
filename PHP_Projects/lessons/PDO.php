<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=db','root','root');
}catch (PDOException $e){
    echo $e->getMessage()."<br>";
    die();
}

foreach ($db->query("select * from users_data") as $p){
    echo $p['username']."<br>";
    echo $p['email']."<br>";
    echo $p['password']."<br><br>";
}

?>