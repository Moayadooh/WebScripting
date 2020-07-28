<?php

session_start();
if (isset($_SESSION['uname'])) {
    echo "<h2>Welcome to product page</h2>";
    echo "<a href='welcome.php'><input type=button value=back></a>";
}
else {
    echo "<script>location.href='login.php'</script>";
}

?>