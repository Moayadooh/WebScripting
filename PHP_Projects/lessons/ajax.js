<html>
	<head>
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<script>
		function chk()
		{
			var name = document.getElementById('name').value;
			var num = document.getElementById('num').value;
			var dataString = 'name=' + name + "&num=" + num;
			$.ajax({
				type:"post",
				url:"hi.php",
				data:dataString,
				cache:false,
				dataType: "json",
				success:function(html){
					$('#msg1').html(html.m1);
					$('#msg2').html(html.m2);
				}
			});
			return false;
		}
		</script>
	</head>
	<body>
		<form>
			<input type="text" id="name">
			<input type="text" id="num">
			<br/><br/>
			<input type="submit" value="submit" onclick="return chk()">
		</form>
		
		<p id="msg1"></p>
		
		<p id="msg2"></p>
		
	</body>
</html>