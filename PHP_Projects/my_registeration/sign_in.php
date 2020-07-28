<?php include 'server.php';?>
<html>
<head>
<title>Sign in</title>
</head>
    <body>
    
    <form action="sign_in.php" method="post">
    <?php include 'errors.php';?>
    <table>
    <tr><td>Username:</td><td><input type="text" name="username"></td></tr>
    <tr><td>Password:</td><td><input type="password" name="password"></td></tr>
    <tr><td><input type="submit" name="signin" value="login"></td></tr>
    <tr><td>New member?<a href=sign_up.php>sign up</a></td></tr>
    </table>
    </form>
    
    </body>
</html>