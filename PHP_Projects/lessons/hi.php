<?php
$name = $_POST['name'];
$num = $_POST['num'];
//echo $name;
echo json_encode(array("m1"=>$name,"m2"=>$num));
?>