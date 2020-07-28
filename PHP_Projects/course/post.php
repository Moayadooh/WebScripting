<html>
<head>
	<title>Post request in PHP</title>
</head>
<body>

	<?php
		if(isset($_POST['submit']))
		{
			$username = $_POST['username'];
			echo "<h1 style='color:red;'>".$username."</h1>";
		}
	?>
	
	<form action = "" method = "post">
	
		<label for="username">UserName</label>
		<input type="text" name="username" id="username">
		<br><br>
		<input type="submit" name="submit" value="submit">
	
	</form>

</body>
</html>