<?php

session_start();
if (isset($_SESSION['uname'])) {
    session_destroy();
	//unset($_SESSION['uname']);
    echo "<script>location.href='login.php'</script>";
}
else {
    echo "<script>location.href='login.php'</script>";
}

?>