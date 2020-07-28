<?php include 'Server.php'; ?>
<html>
<head>
<title>Registration</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
	<h2>Register</h2>
</div>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" class="frm">
<?php include 'Errors.php'; ?>
<table>
    <tr>
        <td><label class="lbl">UserName:</label></td>
        <td><input type="text" name = "username" id="username" class="textbox"></td>
    </tr>
    <tr>
        <td><label class="lbl">Email:</label></td>
        <td><input type="email" name = "email" id="email" class="textbox"></td>
    </tr>
    <tr>
        <td><label class="lbl">Password:</label></td>
        <td><input type="password" name = "password" id="password" class="textbox"></td>
    </tr>
    <tr>
        <td><label class="lbl">Confirm Password:</label></td>
        <td><input type="password" name = "cpassword" id="cpassword" class="textbox"></td>
    </tr>
</table>
<input type="submit" name = "register" value = "REGISTER" class="btn">
<p>Already a member? <a href="login.php">Login</a></p>
</form>
</body>
</html>
