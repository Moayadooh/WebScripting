<html>
<head>
	<title>Get request in PHP</title>
</head>
<body>

	<a href="<?php echo "?val=100"; ?>">Click to see the value</a>
	<?php
		$num = $_GET['val'];
		echo $num + 8;
	?>

</body>
</html>