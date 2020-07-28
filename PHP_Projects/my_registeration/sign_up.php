<?php include 'server.php';?>
<html>
<head>
<title>Sign up</title>
</head>
    <body>
    
    <form action="sign_up.php" method="post">
    <?php include 'errors.php';?>
    <table>
    <tr><td>Username:</td><td><input type="text" name="username" value="<?php echo $uname;?>"></td></tr>
    <tr><td>E-mail:</td><td><input type="email" name="email" value="<?php echo $email;?>"></td></tr>
    <tr><td>Password:</td><td><input type="password" name="pass1"></td></tr>
    <tr><td>Confirm Password:</td><td><input type="password" name="pass2"></td></tr>
    <tr><td><input type="submit" name="signup" value="sign up"></td></tr>
    <tr><td>Already a member?<a href=sign_in.php>sign in</a></td></tr>
    </table>
    </form>
    
    </body>
</html>