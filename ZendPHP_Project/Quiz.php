<?php session_start(); ?>
<html>
<head>
<title>Quiz</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript">
    function CheckAnswer()
    {
        var score = 0;
        //Question 1
        if(document.getElementById("Q1a1").checked)
        	document.getElementById("Q1ans1").style.color = "red";
        else if(document.getElementById("Q1a2").checked)
        	document.getElementById("Q1ans2").style.color = "red";
        else if(document.getElementById("Q1a3").checked)
        	score++;
        else if(document.getElementById("Q1a4").checked)
        	document.getElementById("Q1ans4").style.color = "red";
        document.getElementById("Q1ans3").style.color = "#32CD32";
        document.getElementById("Q1a1").disabled = true;
        document.getElementById("Q1a2").disabled = true;
        document.getElementById("Q1a3").disabled = true;
        document.getElementById("Q1a4").disabled = true;
        //Question 2
        if(document.getElementById("Q2a1").checked)
        	document.getElementById("Q2ans1").style.color = "red";
        else if(document.getElementById("Q2a2").checked)
        	score++;
        else if(document.getElementById("Q2a3").checked)
        	document.getElementById("Q2ans3").style.color = "red";
        else if(document.getElementById("Q2a4").checked)
        	document.getElementById("Q2ans4").style.color = "red";
        document.getElementById("Q2ans2").style.color = "#32CD32";
        document.getElementById("Q2a1").disabled = true;
        document.getElementById("Q2a2").disabled = true;
        document.getElementById("Q2a3").disabled = true;
        document.getElementById("Q2a4").disabled = true;
      	//Question 3
        if(document.getElementById("Q3a1").checked)
        	document.getElementById("Q3ans1").style.color = "red";
        else if(document.getElementById("Q3a2").checked)
        	score++;
        else if(document.getElementById("Q3a3").checked)
        	document.getElementById("Q3ans3").style.color = "red";
        else if(document.getElementById("Q3a4").checked)
        	document.getElementById("Q3ans4").style.color = "red";
        document.getElementById("Q3ans2").style.color = "#32CD32";
        document.getElementById("Q3a1").disabled = true;
        document.getElementById("Q3a2").disabled = true;
        document.getElementById("Q3a3").disabled = true;
        document.getElementById("Q3a4").disabled = true;
      	//Question 4
        if(document.getElementById("Q4a1").checked)
        	document.getElementById("Q4ans1").style.color = "red";
        else if(document.getElementById("Q4a2").checked)
        	score++;
        else if(document.getElementById("Q4a3").checked)
        	document.getElementById("Q4ans3").style.color = "red";
        else if(document.getElementById("Q4a4").checked)
        	document.getElementById("Q4ans4").style.color = "red";
        document.getElementById("Q4ans2").style.color = "#32CD32";
        document.getElementById("Q4a1").disabled = true;
        document.getElementById("Q4a2").disabled = true;
        document.getElementById("Q4a3").disabled = true;
        document.getElementById("Q4a4").disabled = true;
      	//Question 5
        if(document.getElementById("Q5a1").checked)
        	score++;
        else if(document.getElementById("Q5a2").checked)
        	document.getElementById("Q5ans2").style.color = "red";
        else if(document.getElementById("Q5a3").checked)
        	document.getElementById("Q5ans3").style.color = "red";
        else if(document.getElementById("Q5a4").checked)
        	document.getElementById("Q5ans4").style.color = "red";
        document.getElementById("Q5ans1").style.color = "#32CD32";
        document.getElementById("Q5a1").disabled = true;
        document.getElementById("Q5a2").disabled = true;
        document.getElementById("Q5a3").disabled = true;
        document.getElementById("Q5a4").disabled = true;
      	//Question 6
        if(document.getElementById("Q6a1").checked)
        	document.getElementById("Q6ans1").style.color = "red";
        else if(document.getElementById("Q6a2").checked)
        	document.getElementById("Q6ans2").style.color = "red";
        else if(document.getElementById("Q6a3").checked)
        	score++;
        else if(document.getElementById("Q6a4").checked)
        	document.getElementById("Q6ans4").style.color = "red";
        document.getElementById("Q6ans3").style.color = "#32CD32";
        document.getElementById("Q6a1").disabled = true;
        document.getElementById("Q6a2").disabled = true;
        document.getElementById("Q6a3").disabled = true;
        document.getElementById("Q6a4").disabled = true;
      	//Question 7
        if(document.getElementById("Q7a1").checked)
        	document.getElementById("Q7ans1").style.color = "red";
        else if(document.getElementById("Q7a2").checked)
        	document.getElementById("Q7ans2").style.color = "red";
        else if(document.getElementById("Q7a3").checked)
        	score++;
        else if(document.getElementById("Q7a4").checked)
        	document.getElementById("Q7ans4").style.color = "red";
        document.getElementById("Q7ans3").style.color = "#32CD32";
        document.getElementById("Q7a1").disabled = true;
        document.getElementById("Q7a2").disabled = true;
        document.getElementById("Q7a3").disabled = true;
        document.getElementById("Q7a4").disabled = true;
      	//Question 8
        if(document.getElementById("Q8a1").checked)
        	document.getElementById("Q8ans1").style.color = "red";
        else if(document.getElementById("Q8a2").checked)
        	document.getElementById("Q8ans2").style.color = "red";
        else if(document.getElementById("Q8a3").checked)
        	document.getElementById("Q8ans3").style.color = "red";
        else if(document.getElementById("Q8a4").checked)
        	score++;
        document.getElementById("Q8ans4").style.color = "#32CD32";
        document.getElementById("Q8a1").disabled = true;
        document.getElementById("Q8a2").disabled = true;
        document.getElementById("Q8a3").disabled = true;
        document.getElementById("Q8a4").disabled = true;
      	//Question 9
        if(document.getElementById("Q9a1").checked)
        	document.getElementById("Q9ans1").style.color = "red";
        else if(document.getElementById("Q9a2").checked)
        	document.getElementById("Q9ans2").style.color = "red";
        else if(document.getElementById("Q9a3").checked)
        	document.getElementById("Q9ans3").style.color = "red";
        else if(document.getElementById("Q9a4").checked)
        	score++;
        document.getElementById("Q9ans4").style.color = "#32CD32";
        document.getElementById("Q9a1").disabled = true;
        document.getElementById("Q9a2").disabled = true;
        document.getElementById("Q9a3").disabled = true;
        document.getElementById("Q9a4").disabled = true;
      	//Question 10
        if(document.getElementById("Q10a1").checked)
        	document.getElementById("Q10ans1").style.color = "red";
        else if(document.getElementById("Q10a2").checked)
        	document.getElementById("Q10ans2").style.color = "red";
        else if(document.getElementById("Q10a3").checked)
        	score++;
        else if(document.getElementById("Q10a4").checked)
        	document.getElementById("Q10ans4").style.color = "red";
        document.getElementById("Q10ans3").style.color = "#32CD32";
        document.getElementById("Q10a1").disabled = true;
        document.getElementById("Q10a2").disabled = true;
        document.getElementById("Q10a3").disabled = true;
        document.getElementById("Q10a4").disabled = true;
        
        document.getElementById("val").value = score;

        document.getElementById("submit").disabled = true;
    	document.getElementById("submit").style.background = "#D3D3D3";
    	
        document.getElementById("finish").disabled = false;
        document.getElementById("finish").style.background = "#4CAF50";
    }
    window.onload = function()
    {
    	document.getElementById("finish").disabled = true;
    	document.getElementById("finish").style.background = "#D3D3D3";
    };
    
</script>
</head>
<body>
<?php 
if(isset($_SESSION['userid']))
{
?>
<form class="qfrm" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">

        Q1. PHP function used to convert the letters to lower case is:<br>
        <input type="radio" name = "ans1" id="Q1a1"><label id="Q1ans1">count()</label><br>
        <input type="radio" name = "ans1" id="Q1a2"><label id="Q1ans2">sort()</label><br>
        <input type="radio" name = "ans1" id="Q1a3"><label id="Q1ans3">strtolower()</label><br>
        <input type="radio" name = "ans1" id="Q1a4"><label id="Q1ans4">strtoupper()</label><br><br>

        Q2. PHP function used to display information about the variable is:<br>
        <input type="radio" name = "ans2" id="Q2a1"><label id="Q2ans1">mysqli_query()</label><br>
        <input type="radio" name = "ans2" id="Q2a2"><label id="Q2ans2">print_r()</label><br>
        <input type="radio" name = "ans2" id="Q2a3"><label id="Q2ans3">ksort()</label><br>
        <input type="radio" name = "ans2" id="Q2a4"><label id="Q2ans4">echo</label><br><br>

        Q3. ________________is type of PHP array store the data as collection of keys and values.<br>
        <input type="radio" name = "ans3" id="Q3a1"><label id="Q3ans1">multi demensional array</label><br>
        <input type="radio" name = "ans3" id="Q3a2"><label id="Q3ans2">Associative array</label><br>
        <input type="radio" name = "ans3" id="Q3a3"><label id="Q3ans3">Indexed array</label><br>
        <input type="radio" name = "ans3" id="Q3a4"><label id="Q3ans4">None of the above</label><br><br>

        Q4. ________________return the last modification time of the specified file.<br>
        <input type="radio" name = "ans4" id="Q4a1"><label id="Q4ans1">fileatime()</label><br>
        <input type="radio" name = "ans4" id="Q4a2"><label id="Q4ans2">filemtime()</label><br>
        <input type="radio" name = "ans4" id="Q4a3"><label id="Q4ans3">fopen()</label><br>
        <input type="radio" name = "ans4" id="Q4a4"><label id="Q4ans4">feof()</label><br><br>

        Q5. An action used in html form to call the same page when submiting the form is:<br>
        <input type="radio" name = "ans5" id="Q5a1"><label id="Q5ans1">$_SERVER['PHP_SELF']</label><br>
        <input type="radio" name = "ans5" id="Q5a2"><label id="Q5ans2">$_POST['']</label><br>
        <input type="radio" name = "ans5" id="Q5a3"><label id="Q5ans3">$_GET['']</label><br>
        <input type="radio" name = "ans5" id="Q5a4"><label id="Q5ans4">include 'page.php'</label><br><br>

        Q6. PHP fuction used to prevent SQL injection attack is:<br>
        <input type="radio" name = "ans6" id="Q6a1"><label id="Q6ans1">array_push()</label><br>
        <input type="radio" name = "ans6" id="Q6a2"><label id="Q6ans2">mysqli_num_rows()</label><br>
        <input type="radio" name = "ans6" id="Q6a3"><label id="Q6ans3">mysqli_real_escape_string()</label><br>
        <input type="radio" name = "ans6" id="Q6a4"><label id="Q6ans4">mysqli_affected_rows()</label><br><br>

        Q7. The concept of nested loop means:<br>
        <input type="radio" name = "ans7" id="Q7a1"><label id="Q7ans1">if statements inside loop</label><br>
        <input type="radio" name = "ans7" id="Q7a2"><label id="Q7ans2">function inside array</label><br>
        <input type="radio" name = "ans7" id="Q7a3"><label id="Q7ans3">loop inside loop</label><br>
        <input type="radio" name = "ans7" id="Q7a4"><label id="Q7ans4">loop inside array</label><br><br>
        
        Q8. Store small bits of information about a user in user's browser with limited size of 4KB is:<br>
        <input type="radio" name = "ans8" id="Q8a1"><label id="Q8ans1">Constant</label><br>
        <input type="radio" name = "ans8" id="Q8a2"><label id="Q8ans2">Variable</label><br>
        <input type="radio" name = "ans8" id="Q8a3"><label id="Q8ans3">Sessions</label><br>
        <input type="radio" name = "ans8" id="Q8a4"><label id="Q8ans4">Cookie</label><br><br>
        
        Q9. Store user information on the server for later use and can be used to all pages in one application:<br>
        <input type="radio" name = "ans9" id="Q9a1"><label id="Q9ans1">Cookie</label><br>
        <input type="radio" name = "ans9" id="Q9a2"><label id="Q9ans2">Constant</label><br>
        <input type="radio" name = "ans9" id="Q9a3"><label id="Q9ans3">Variable</label><br>
        <input type="radio" name = "ans9" id="Q9a4"><label id="Q9ans4">Sessions</label><br>
        
        Q10. Key word used to include file in another PHP file.It will emit a fatal error and the program will stop if the file is not exisit:<br>
        <input type="radio" name = "ans10" id="Q10a1"><label id="Q10ans1">file_exists()</label><br>
        <input type="radio" name = "ans10" id="Q10a2"><label id="Q10ans2">is_file()</label><br>
        <input type="radio" name = "ans10" id="Q10a3"><label id="Q10ans3">require</label><br>
        <input type="radio" name = "ans10" id="Q10a4"><label id="Q10ans4">include</label><br>

		<input type="button" name = "submit" value = "Submit Quiz" id="submit" onclick="CheckAnswer();" class="btn">
    	<input type="submit" name = "finish" value = "Show Result" id="finish" class="btn">
        <input name="val" id="val" type="hidden" value="0"/>

</form>
</body>
</html>

<?php 
    if(isset($_POST['finish']))
    {
        include 'Server.php';
        $_SESSION['quiz_done'] = TRUE;
        echo "<script>window.location='Welcome.php'</script>";
    }
}
else
{
    echo "<script>window.location='Login.php'</script>";
}
?>