<?php session_start(); ?>
<html>
<head>
<title>Welcome</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php 
if(isset($_SESSION['userid']))
{
?>
<form method="post">
<button type="submit" name="logout" class="btn-link">Logout</button>
<?php 
if(isset($_SESSION['username']))
{
    echo "<h4 style='margin-top:50px;margin-left:10px;'>Welcome ".$_SESSION['username']." you are now logged in</h4>";
}
?>
<table>
<tr style="height: 300px;"><td>
<?php 
    if(isset($_POST['start']))
    {
        include 'Server.php';
        echo "<script>window.location='Quiz.php'</script>";
    }
    elseif (isset($_POST['results']))
    {
        include 'Server.php';
    }
    elseif (isset($_SESSION['quiz_done']))
    {
        include 'Server.php';
    }
    elseif (isset($_POST['logout']))
    {
        session_destroy();
        echo "<script>window.location='Login.php'</script>";
    }
?>
</td></tr>
<tr>
    <td><input type="submit" name = "start" value = "Start Quiz" class="btn"></td>
</tr>
<tr>
    <td><input type="submit" name = "results" value = "Display Results" class="btn"></td>
</tr>
</table>
</form>
</body>
</html>

<?php 
}
else
{
    echo "<script>window.location='Login.php'</script>";
}
?>