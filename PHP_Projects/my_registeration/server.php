<?php
session_start();

$uname = "";
$email = "";
$errors = array();

$db = mysqli_connect("localhost","root","root","db");

if (isset($_POST['signup'])) {
    $uname = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $pass1 = mysqli_real_escape_string($db, $_POST['pass1']);
    $pass2 = mysqli_real_escape_string($db, $_POST['pass2']);
    
    if (empty($uname)) {
        array_push($errors, "Username is required");
    }
    if (empty($email)) {
        array_push($errors, "E-mail is required");
    }
    if (empty($pass1)) {
        array_push($errors, "Password is required");
    }
    if ($pass1!=$pass2 && !empty($pass1)) {
        array_push($errors, "The two password is not match");
    }
    
    $query = mysqli_query($db, "select * from users_data where username='$uname' or email='$email'");
    $result = mysqli_fetch_assoc($query);
    if ($result) {
        if ($result['username']==$uname) {
            array_push($errors, "Username is already exist");
        }
        if ($result['email']==$email) {
            array_push($errors, "E-mail is already exist");
        }
    }
    
    if (count($errors)==0) {
        $password = md5($pass1);
        mysqli_query($db, "insert into users_data (username,email,password) values ('$uname','$email','$password')");
        $_SESSION['username'] = $uname;
        $_SESSION['seccuss'] = "You are now logged in";
        header('location:index.php');
    }
}

if (isset($_POST['signin'])) {
    $uname = mysqli_real_escape_string($db, $_POST['username']);
    $pass1 = mysqli_real_escape_string($db, $_POST['password']);
    $password = md5($pass1);
    
    if (empty($uname)) {
        array_push($errors, "Username is required");
    }
    if (empty($pass1)) {
        array_push($errors, "Password is required");
    }
    
    if (count($errors)==0) {
        $query = mysqli_query($db, "select * from users_data where username='$uname' and password='$password' limit 1");
        if (mysqli_num_rows($query)==1) {
            $_SESSION['username'] = $uname;
            $_SESSION['seccuss'] = "You are now logged in";
            header('location:index.php');
        }
        else {
            array_push($errors, "Wrong username or password");
        }
    }
}
mysqli_close($db);
?>