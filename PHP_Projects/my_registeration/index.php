<?php
session_start();

if (isset($_GET['logout'])) {
    session_destroy();
    header('location:sign_in.php');
}
if (isset($_SESSION['seccuss'])) {
    echo "<h3>".$_SESSION['seccuss']."</h3>";
    unset($_SESSION['seccuss']);
}
if (isset($_SESSION['username'])) {
    echo "<h1>Welcome ".$_SESSION['username']."</h1>";
    echo "<a href=index.php?logout='1'>logout</a>";
}
else {
    echo "You must log in first";
}
?>