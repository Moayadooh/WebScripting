<?php
    $cookie_name = "user";
    if(isset($_POST['username']))
    {
        $cookie_value = $_POST['username'];
        setcookie($cookie_name, $cookie_value, time() + (30), "/"); // 86400 = 1 day
    }
    include 'Server.php';
?>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
	<h2>Login</h2>
</div>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" class="frm">
<?php include 'Errors.php'; ?>
<table>
    <tr>
        <td><label class="lbl">UserName:</label></td>
        <td><input type="text" name = "username" id="username" class="textbox" value="<?php if(!empty($_COOKIE[$cookie_name])){echo $_COOKIE[$cookie_name];} ?>"></td>
    </tr>
    <tr>
        <td><label class="lbl">Password:</label></td>
        <td><input type="password" name = "password" id="password" class="textbox"></td>
    </tr>
</table>
<input type="submit" name = "login" value = "LOGIN" class="btn">
<p>Not yet a member? <a href="registration.php">Register</a></p>
</form>
</body>	
</html>
