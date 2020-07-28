<?php

session_start();
if (isset($_SESSION['uname'])) {
    echo "<h1>welcome ".$_SESSION['uname']."</h1>";
    echo "<a href='product.php'>product</a><br><br>";
    echo "<a href='logout.php'><input type=button value=logout></a>";
}
else {
    if ($_POST['uname']=="admin" && $_POST['pwd']=="admin") {
        $_SESSION['uname']="admin";
        echo "<script>location.href='welcome.php'</script>";
    }
    else {
        echo "<script>alert('Invalid username or password!!!')</script>";
		echo "<script>location.href='login.php'</script>";
    }
}

?>