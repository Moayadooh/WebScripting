<!DOCTYPE html>
<html>
<head>
<title>A Simple HTML Form</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">

<p><label for="user">Name: </label><br>
<input type="text" id="user" name="user"></p>
<p><label for="job">Job: </label><br>
<input type="text" id="job" name="job"></p>
<p> <label for="message">Message: </label><br>
<textarea id = "message" name ="message" rows="5" cols="40"></textarea></p>

<button type="submit" name="submit" value="send">Send Message</button>
</form>
</body>
</html>

<?php 

	if(isset($_POST['user']))
		echo "Welcome ".$_POST['user']."<br>";
	
	if(isset($_POST['job']))
		echo "Welcome ".$_POST['job']."<br>";
	
	if(isset($_POST['message']))
		echo "Welcome ".$_POST['message']."<br>";
	
?>



<?php 
/*
 * $_POST is secure
 * $_POST store more data
 * 
 * $_GET not secure
 * &_GET store less data
 */


/*
 * <!DOCTYPE html>
<html>
<head>
<title>A Simple Response</title>
</head>
<body>
<p>Welcome, <strong><?php echo $_GET['user'];?></strong></p>
<p>Your job is: <strong><?php echo $_GET['job'];?></strong></p>
<p>Your message is: <strong><?php echo $_GET['message'];?></strong></p>
</body>
</html>

 * 
 * 
 */
?>