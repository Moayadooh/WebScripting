<html>
 <head>
  <title>UMP Software Engineering</title>
 </head>
 <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script type="text/javascript">	
		function Calculate()
		{
			//Semester 1
			var module1 = document.getElementById('BCC1012').value;//ICT Competency Workshop
			var module2 = document.getElementById('BCC1032').value;//Application Development Workshop
			var module3 = document.getElementById('BCN1043').value;//Computer Architecture & Organization
			var module4 = document.getElementById('BCS1143').value;//Problem Solving
			var module5 = document.getElementById('BUM1213').value;//Fundamental Discrete Structure
			
			//Semester 2
			var module6 = document.getElementById('BCI2023').value;//Database Systems
			var module7 = document.getElementById('BCN1052').value;//LAN Workshop
			var module8 = document.getElementById('BCN2053').value;//Operating Systems
			var module9 = document.getElementById('BCS1023').value;//Introduction to Programming
			var module10 = document.getElementById('BUM1433').value;//Discrete Structure & Application
			var module11 = document.getElementById('BUM2220').value;//Basic Mathematics
			
			//Semester 3
			var module12 = document.getElementById('BCN1053').value;//Data Communication & Networking
			var module13 = document.getElementById('BCS1093').value;//Data Structure & Algorithms
			var module14 = document.getElementById('BCS1133').value;//System Analysis & Design
			var module15 = document.getElementById('BCS2173').value;//Human Computer Interaction
			var module16 = document.getElementById('BUM2413-C').value;//Applied Statistics
			var module17 = document.getElementById('UHS1021').value;//Soft Skills 1
			
			//Semester 4
			var module18 = document.getElementById('BCN2023').value;//Data & Network Security
			var module19 = document.getElementById('BCS2143').value;//Object Orienter Programming
			var module20 = document.getElementById('BCS2283').value;//Introduction to Software Engineering
			var module21 = document.getElementById('BCS2303').value;//Web Scripting
			var module22 = document.getElementById('BUM2226').value;//Differential Equation
			var module23 = document.getElementById('UGE2002-C').value;//Technopreneurship
			
			//Semester 5
			var module24 = document.getElementById('BCM2043').value;//Multimedia Technology & Applications
			var module25 = document.getElementById('BCN3133').value;//Computer Ethic & Policies
			var module26 = document.getElementById('BCS2203').value;//Web Application Development
			var module27 = document.getElementById('BCS2313').value;//Artificial Intelligence
			var module28 = document.getElementById('BCS2333').value;//Software Planning & Requirement Workshop
			
			//Semester 6
			var module29 = document.getElementById('BCM2053').value;//Computer Graphics
			var module30 = document.getElementById('BCM3143').value;//Computer Game Programming
			var module31 = document.getElementById('BCS2343').value;//Software Design Workshop
			var module32 = document.getElementById('BCS3283').value;//Mobile Application Development
			var module33 = document.getElementById('BCS3293').value;//Software Configuration Management
			
			//Semester 7
			var module34 = document.getElementById('BCM2063').value;//Image Processing
			var module35 = document.getElementById('BCS3113').value;//Zend PhP
			var module36 = document.getElementById('BCS3323').value;//Software Testing and Maintenance
			var module37 = document.getElementById('BCS2213').value;//Formal Method
			var module38 = document.getElementById('BCC3013').value;//Undergraduate Project I
			
			//Semester 8
			var module39 = document.getElementById('BCI3913').value;//Structured Query Language
			var module40 = document.getElementById('BCM3153').value;//Visual Effects & 3D Animation
			var module41 = document.getElementById('BCS3263').value;//Software Quality Assurance
			var module42 = document.getElementById('BCC3026').value;//Undergraduate Project II
			
			var dataString = 'BCC1012='+module1 + '&BCC1032='+module2 + '&BCN1043='+module3 + '&BCS1143='+module4 + '&BUM1213='+module5
			 + '&BCI2023='+module6 + '&BCN1052='+module7 + '&BCN2053='+module8 + '&BCS1023='+module9 + '&BUM1433='+module10 + '&BUM2220='+module11
			 + '&BCN1053='+module12 + '&BCS1093='+module13 + '&BCS1133='+module14 + '&BCS2173='+module15 + '&BUM2413-C='+module16 + '&UHS1021='+module17
			 + '&BCN2023='+module18 + '&BCS2143='+module19 + '&BCS2283='+module20 + '&BCS2303='+module21 + '&BUM2226='+module22 + '&UGE2002-C='+module23
			 + '&BCM2043='+module24 + '&BCN3133='+module25 + '&BCS2203='+module26 + '&BCS2313='+module27 + '&BCS2333='+module28
			 + '&BCM2053='+module29 + '&BCM3143='+module30 + '&BCS2343='+module31 + '&BCS3283='+module32 + '&BCS3293='+module33
			 + '&BCM2063='+module34 + '&BCS3113='+module35 + '&BCS3323='+module36 + '&BCS2213='+module37 + '&BCC3013='+module38
			 + '&BCI3913='+module39 + '&BCM3153='+module40 + '&BCS3263='+module41 + '&BCC3026='+module42;
			$.ajax({
				type:"post",
				url:"UMP_Software_Engineering_Calculation.php",
				data:dataString,
				cache:false,
				dataType: "json",
				success:function(html){
					$('#cumulativeCreditsAttempt').html(html.cumulativeCreditsAttempt);
					$('#cumulativeCreditsEarned').html(html.cumulativeCreditsEarned);
					$('#cumulativeGPA').html(html.cumulativeGPA);
					$('#cumulativeRating').html(html.cumulativeRating);
					
					$('#sem1CreditsAttempted').html(html.sem1CreditsAttempted);
					$('#sem2CreditsAttempted').html(html.sem2CreditsAttempted);
					$('#sem3CreditsAttempted').html(html.sem3CreditsAttempted);
					$('#sem4CreditsAttempted').html(html.sem4CreditsAttempted);
					$('#sem5CreditsAttempted').html(html.sem5CreditsAttempted);
					$('#sem6CreditsAttempted').html(html.sem6CreditsAttempted);
					$('#sem7CreditsAttempted').html(html.sem7CreditsAttempted);
					$('#sem8CreditsAttempted').html(html.sem8CreditsAttempted);
					
					$('#sem1CreditsEarned').html(html.sem1CreditsEarned);
					$('#sem2CreditsEarned').html(html.sem2CreditsEarned);
					$('#sem3CreditsEarned').html(html.sem3CreditsEarned);
					$('#sem4CreditsEarned').html(html.sem4CreditsEarned);
					$('#sem5CreditsEarned').html(html.sem5CreditsEarned);
					$('#sem6CreditsEarned').html(html.sem6CreditsEarned);
					$('#sem7CreditsEarned').html(html.sem7CreditsEarned);
					$('#sem8CreditsEarned').html(html.sem8CreditsEarned);
					
					$('#sem1GPA').html(html.sem1GPA);
					$('#sem2GPA').html(html.sem2GPA);
					$('#sem3GPA').html(html.sem3GPA);
					$('#sem4GPA').html(html.sem4GPA);
					$('#sem5GPA').html(html.sem5GPA);
					$('#sem6GPA').html(html.sem6GPA);
					$('#sem7GPA').html(html.sem7GPA);
					$('#sem8GPA').html(html.sem8GPA);
					
					$('#sem1Rating').html(html.sem1Rating);
					$('#sem2Rating').html(html.sem2Rating);
					$('#sem3Rating').html(html.sem3Rating);
					$('#sem4Rating').html(html.sem4Rating);
					$('#sem5Rating').html(html.sem5Rating);
					$('#sem6Rating').html(html.sem6Rating);
					$('#sem7Rating').html(html.sem7Rating);
					$('#sem8Rating').html(html.sem8Rating);
				}
			});
			return false;
		}
		
		function Result(moduleName,moduleID)
		{
			var GPA = document.getElementById(moduleID).value;
			if(GPA>1)
				document.getElementById(moduleName).textContent = "Pass";
			else if(GPA<=1)
				document.getElementById(moduleName).textContent = "Fail";
			else
				document.getElementById(moduleName).textContent = "";
		}
		
		$(window).resize(function() {
			var items,i;
			if($(this).width()<1200)
			{
				items = document.getElementsByClassName("left");
				 for (i=0;i<items.length;i++) {
					items[i].style.cssFloat = "none";
				 }
				 items = document.getElementsByClassName("right");
				 for (i=0;i<items.length;i++) {
					items[i].style.cssFloat = "none";
				 }
			}
			if( $(this).width() > 1200 )
			{
				items = document.getElementsByClassName("left");
				 for (i=0;i<items.length;i++) {
					items[i].style.cssFloat = "left";
				 }
				 items = document.getElementsByClassName("right");
				 for (i=0;i<items.length;i++) {
					items[i].style.cssFloat = "right";
				 }
			}
		});
	</script>
 <style type="text/css">
	#wrap
	{
		max-width:1200px;
		margin:auto;
	}
	.left
	{
		margin:10px;
	}
	.right
	{
		margin:10px;
	}
	div table
	{
		width:580px;
		height:210px;
	}
 </style>
 <body onload="$(window).resize();">

<form method="post">
<div id="wrap">
<div class="left">
<table border ="1">
 <tr>
 <th colspan="5">SEMESTER 1</th>
 </tr>
 <tr>
 <th>Module ID</th>
 <th>Module Name</th>
 <th>Credit Hours</th>
 <th>Grade</th>
 <th>Result</th>
 </tr>
 <tr>
 <td>BCC1012</td>
 <td><b>ICT Competency Workshop</b></td>
 <td style="text-align:center;">3.00</td>
 <td style="text-align:center;">
	<select id="BCC1012" oninput="Result('module1','BCC1012');">
	  <option value="4.00">A</option>
	  <option value="3.70">A-</option>
	  <option value="3.67">B+</option>
	  <option value="3.33">B</option>
	  <option value="3.00">B-</option>
	  <option value="2.67">C+</option>
	  <option value="2.33">C</option>
	  <option value="2.00">C-</option>
	  <option value="1.67">D</option>
	  <option value="1.00">E+</option>
	  <option value="0.67">E</option>
	  <option value="0.00">F</option>
	  <option selected>None</option>
	</select>
 </td>
 <td id="module1" style="text-align:center;"></td>
 </tr>
 <tr>
 <td>BCC1032</td>
 <td><b>Application Development Workshop</b></td>
 <td style="text-align:center;">3.00</td>
 <td style="text-align:center;">
	<select id="BCC1032" oninput="Result('module2','BCC1032');">
	  <option value="4.00">A</option>
	  <option value="3.70">A-</option>
	  <option value="3.67">B+</option>
	  <option value="3.33">B</option>
	  <option value="3.00">B-</option>
	  <option value="2.67">C+</option>
	  <option value="2.33">C</option>
	  <option value="2.00">C-</option>
	  <option value="1.67">D</option>
	  <option value="1.00">E+</option>
	  <option value="0.67">E</option>
	  <option value="0.00">F</option>
	  <option selected>None</option>
	</select>
 </td>
 <td id="module2" style="text-align:center;"></td>
 </tr>
 <tr>
 <td>BCN1043</td>
 <td><b>Computer Architecture & Organization</b></td>
 <td style="text-align:center;">3.00</td>
 <td style="text-align:center;">
	<select id="BCN1043" oninput="Result('module3','BCN1043');">
	  <option value="4.00">A</option>
	  <option value="3.70">A-</option>
	  <option value="3.67">B+</option>
	  <option value="3.33">B</option>
	  <option value="3.00">B-</option>
	  <option value="2.67">C+</option>
	  <option value="2.33">C</option>
	  <option value="2.00">C-</option>
	  <option value="1.67">D</option>
	  <option value="1.00">E+</option>
	  <option value="0.67">E</option>
	  <option value="0.00">F</option>
	  <option selected>None</option>
	</select>
 </td>
 <td id="module3" style="text-align:center;"></td>
 </tr>
 <tr>
 <td>BCS1143</td>
 <td><b>Problem Solving</b></td>
 <td style="text-align:center;">3.00</td>
 <td style="text-align:center;">
	<select id="BCS1143" oninput="Result('module4','BCS1143');">
	  <option value="4.00">A</option>
	  <option value="3.70">A-</option>
	  <option value="3.67">B+</option>
	  <option value="3.33">B</option>
	  <option value="3.00">B-</option>
	  <option value="2.67">C+</option>
	  <option value="2.33">C</option>
	  <option value="2.00">C-</option>
	  <option value="1.67">D</option>
	  <option value="1.00">E+</option>
	  <option value="0.67">E</option>
	  <option value="0.00">F</option>
	  <option selected>None</option>
	</select>
 </td>
 <td id="module4" style="text-align:center;"></td>
 </tr>
 <tr>
 <td>BUM1213</td>
 <td><b>Fundamental Discrete Structure</b></td>
 <td style="text-align:center;">2.00</td>
 <td style="text-align:center;">
	<select id="BUM1213" oninput="Result('module5','BUM1213');">
	  <option value="4.00">A</option>
	  <option value="3.70">A-</option>
	  <option value="3.67">B+</option>
	  <option value="3.33">B</option>
	  <option value="3.00">B-</option>
	  <option value="2.67">C+</option>
	  <option value="2.33">C</option>
	  <option value="2.00">C-</option>
	  <option value="1.67">D</option>
	  <option value="1.00">E+</option>
	  <option value="0.67">E</option>
	  <option value="0.00">F</option>
	  <option selected>None</option>
	</select>
 </td>
 <td id="module5" style="text-align:center;"></td>
 </tr>
</table>
<table style="width:auto;height:50px;">
	<tr>
		<td><b>SEMESTER CREDITS ATTEMPTED:</b></td>
		<td><b><p id="sem1CreditsAttempted"></p></b></td>
	</tr>
	<tr>
		<td><b>SEMESTER CREDITS EARNED:</b></td>
		<td><b><p id="sem1CreditsEarned"></p></b></td>
	</tr>
	<tr>
		<td><b>SEMESTER GPA:</b></td>
		<td><b><p id="sem1GPA"></p></b></td>
	</tr>
	<tr>
		<td><b>SEMESTER RATING:</b></td>
		<td><b><p id="sem1Rating"></p></b></td>
	</tr>
</table>
</div>
</div>

<div id="wrap">
<div class="right">
<table border ="1">
 <tr>
 <th colspan="5">SEMESTER 2</th>
 </tr>
 <tr>
 <th>Module ID</th>
 <th>Module Name</th>
 <th>Credit Hours</th>
 <th>Grade</th>
 <th>Result</th>
 </tr>
 <tr>
 <td>BCI2023</td>
 <td><b>Database Systems</b></td>
 <td style="text-align:center;">3.00</td>
 <td style="text-align:center;">
	<select id="BCI2023" oninput="Result('module6','BCI2023');">
	  <option value="4.00">A</option>
	  <option value="3.70">A-</option>
	  <option value="3.67">B+</option>
	  <option value="3.33">B</option>
	  <option value="3.00">B-</option>
	  <option value="2.67">C+</option>
	  <option value="2.33">C</option>
	  <option value="2.00">C-</option>
	  <option value="1.67">D</option>
	  <option value="1.00">E+</option>
	  <option value="0.67">E</option>
	  <option value="0.00">F</option>
	  <option selected>None</option>
	</select>
 </td>
 <td id="module6" style="text-align:center;"></td>
 </tr>
 <tr>
 <td>BCN1052</td>
 <td><b>LAN Workshop</b></td>
 <td style="text-align:center;">3.00</td>
 <td style="text-align:center;">
	<select id="BCN1052" oninput="Result('module7','BCN1052');">
	  <option value="4.00">A</option>
	  <option value="3.70">A-</option>
	  <option value="3.67">B+</option>
	  <option value="3.33">B</option>
	  <option value="3.00">B-</option>
	  <option value="2.67">C+</option>
	  <option value="2.33">C</option>
	  <option value="2.00">C-</option>
	  <option value="1.67">D</option>
	  <option value="1.00">E+</option>
	  <option value="0.67">E</option>
	  <option value="0.00">F</option>
	  <option selected>None</option>
	</select>
 </td>
 <td id="module7" style="text-align:center;"></td>
 </tr>
 <tr>
 <td>BCN2053</td>
 <td><b>Operating Systems</b></td>
 <td style="text-align:center;">3.00</td>
 <td style="text-align:center;">
	<select id="BCN2053" oninput="Result('module8','BCN2053');">
	  <option value="4.00">A</option>
	  <option value="3.70">A-</option>
	  <option value="3.67">B+</option>
	  <option value="3.33">B</option>
	  <option value="3.00">B-</option>
	  <option value="2.67">C+</option>
	  <option value="2.33">C</option>
	  <option value="2.00">C-</option>
	  <option value="1.67">D</option>
	  <option value="1.00">E+</option>
	  <option value="0.67">E</option>
	  <option value="0.00">F</option>
	  <option selected>None</option>
	</select>
 </td>
 <td id="module8" style="text-align:center;"></td>
 </tr>
 <tr>
 <td>BCS1023</td>
 <td><b>Introduction to Programming</b></td>
 <td style="text-align:center;">3.00</td>
 <td style="text-align:center;">
	<select id="BCS1023" oninput="Result('module9','BCS1023');">
	  <option value="4.00">A</option>
	  <option value="3.70">A-</option>
	  <option value="3.67">B+</option>
	  <option value="3.33">B</option>
	  <option value="3.00">B-</option>
	  <option value="2.67">C+</option>
	  <option value="2.33">C</option>
	  <option value="2.00">C-</option>
	  <option value="1.67">D</option>
	  <option value="1.00">E+</option>
	  <option value="0.67">E</option>
	  <option value="0.00">F</option>
	  <option selected>None</option>
	</select>
 </td>
 <td id="module9" style="text-align:center;"></td>
 </tr>
 <tr>
 <td>BUM1433</td>
 <td><b>Discrete Structure & Application</b></td>
 <td style="text-align:center;">2.00</td>
 <td style="text-align:center;">
	<select id="BUM1433" oninput="Result('module10','BUM1433');">
	  <option value="4.00">A</option>
	  <option value="3.70">A-</option>
	  <option value="3.67">B+</option>
	  <option value="3.33">B</option>
	  <option value="3.00">B-</option>
	  <option value="2.67">C+</option>
	  <option value="2.33">C</option>
	  <option value="2.00">C-</option>
	  <option value="1.67">D</option>
	  <option value="1.00">E+</option>
	  <option value="0.67">E</option>
	  <option value="0.00">F</option>
	  <option selected>None</option>
	</select>
 </td>
 <td id="module10" style="text-align:center;"></td>
 </tr>
 <tr>
 <td>BUM2220</td>
 <td><b>Basic Mathematics</b></td>
 <td style="text-align:center;">2.00</td>
 <td style="text-align:center;">
	<select id="BUM2220" oninput="Result('module11','BUM2220');">
	  <option value="4.00">A</option>
	  <option value="3.70">A-</option>
	  <option value="3.67">B+</option>
	  <option value="3.33">B</option>
	  <option value="3.00">B-</option>
	  <option value="2.67">C+</option>
	  <option value="2.33">C</option>
	  <option value="2.00">C-</option>
	  <option value="1.67">D</option>
	  <option value="1.00">E+</option>
	  <option value="0.67">E</option>
	  <option value="0.00">F</option>
	  <option selected>None</option>
	</select>
 </td>
 <td id="module11" style="text-align:center;"></td>
 </tr>
</table>
<table style="width:auto;height:50px;">
	<tr>
		<td><b>SEMESTER CREDITS ATTEMPTED:</b></td>
		<td><b><p id="sem2CreditsAttempted"></p></b></td>
	</tr>
	<tr>
		<td><b>SEMESTER CREDITS EARNED:</b></td>
		<td><b><p id="sem2CreditsEarned"></p></b></td>
	</tr>
	<tr>
		<td><b>SEMESTER GPA:</b></td>
		<td><b><p id="sem2GPA"></p></b></td>
	</tr>
	<tr>
		<td><b>SEMESTER RATING:</b></td>
		<td><b><p id="sem2Rating"></p></b></td>
	</tr>
</table>
</div>
</div>

<div id="wrap">
<div class="left">
<table border ="1">
 <tr>
 <th colspan="5">SEMESTER 3</th>
 </tr>
 <tr>
 <th>Module ID</th>
 <th>Module Name</th>
 <th>Credit Hours</th>
 <th>Grade</th>
 <th>Result</th>
 </tr>
 <tr>
 <td>BCN1053</td>
 <td><b>Data Communication & Networking</b></td>
 <td style="text-align:center;">3.00</td>
 <td style="text-align:center;">
	<select id="BCN1053" oninput="Result('module12','BCN1053');">
	  <option value="4.00">A</option>
	  <option value="3.70">A-</option>
	  <option value="3.67">B+</option>
	  <option value="3.33">B</option>
	  <option value="3.00">B-</option>
	  <option value="2.67">C+</option>
	  <option value="2.33">C</option>
	  <option value="2.00">C-</option>
	  <option value="1.67">D</option>
	  <option value="1.00">E+</option>
	  <option value="0.67">E</option>
	  <option value="0.00">F</option>
	  <option selected>None</option>
	</select>
 </td>
 <td id="module12" style="text-align:center;"></td>
 </tr>
 <tr>
 <td>BCS1093</td>
 <td><b>Data Structure & Algorithms</b></td>
 <td style="text-align:center;">3.00</td>
 <td style="text-align:center;">
	<select id="BCS1093" oninput="Result('module13','BCS1093');">
	  <option value="4.00">A</option>
	  <option value="3.70">A-</option>
	  <option value="3.67">B+</option>
	  <option value="3.33">B</option>
	  <option value="3.00">B-</option>
	  <option value="2.67">C+</option>
	  <option value="2.33">C</option>
	  <option value="2.00">C-</option>
	  <option value="1.67">D</option>
	  <option value="1.00">E+</option>
	  <option value="0.67">E</option>
	  <option value="0.00">F</option>
	  <option selected>None</option>
	</select>
 </td>
 <td id="module13" style="text-align:center;"></td>
 </tr>
 <tr>
 <td>BCS1133</td>
 <td><b>System Analysis & Design</b></td>
 <td style="text-align:center;">3.00</td>
 <td style="text-align:center;">
	<select id="BCS1133" oninput="Result('module14','BCS1133');">
	  <option value="4.00">A</option>
	  <option value="3.70">A-</option>
	  <option value="3.67">B+</option>
	  <option value="3.33">B</option>
	  <option value="3.00">B-</option>
	  <option value="2.67">C+</option>
	  <option value="2.33">C</option>
	  <option value="2.00">C-</option>
	  <option value="1.67">D</option>
	  <option value="1.00">E+</option>
	  <option value="0.67">E</option>
	  <option value="0.00">F</option>
	  <option selected>None</option>
	</select>
 </td>
 <td id="module14" style="text-align:center;"></td>
 </tr>
 <tr>
 <td>BCS2173</td>
 <td><b>Human Computer Interaction</b></td>
 <td style="text-align:center;">3.00</td>
 <td style="text-align:center;">
	<select id="BCS2173" oninput="Result('module15','BCS2173');">
	  <option value="4.00">A</option>
	  <option value="3.70">A-</option>
	  <option value="3.67">B+</option>
	  <option value="3.33">B</option>
	  <option value="3.00">B-</option>
	  <option value="2.67">C+</option>
	  <option value="2.33">C</option>
	  <option value="2.00">C-</option>
	  <option value="1.67">D</option>
	  <option value="1.00">E+</option>
	  <option value="0.67">E</option>
	  <option value="0.00">F</option>
	  <option selected>None</option>
	</select>
 </td>
 <td id="module15" style="text-align:center;"></td>
 </tr>
 <tr>
 <td>BUM2413-C</td>
 <td><b>Applied Statistics</b></td>
 <td style="text-align:center;">2.00</td>
 <td style="text-align:center;">
	<select id="BUM2413-C" oninput="Result('module16','BUM2413-C');">
	  <option value="4.00">A</option>
	  <option value="3.70">A-</option>
	  <option value="3.67">B+</option>
	  <option value="3.33">B</option>
	  <option value="3.00">B-</option>
	  <option value="2.67">C+</option>
	  <option value="2.33">C</option>
	  <option value="2.00">C-</option>
	  <option value="1.67">D</option>
	  <option value="1.00">E+</option>
	  <option value="0.67">E</option>
	  <option value="0.00">F</option>
	  <option selected>None</option>
	</select>
 </td>
 <td id="module16" style="text-align:center;"></td>
 </tr>
 <tr>
 <td>UHS1021</td>
 <td><b>Soft Skills 1</b></td>
 <td style="text-align:center;">1.00</td>
 <td style="text-align:center;">
	<select id="UHS1021" oninput="Result('module17','UHS1021');">
	  <option value="4.00">A</option>
	  <option value="3.70">A-</option>
	  <option value="3.67">B+</option>
	  <option value="3.33">B</option>
	  <option value="3.00">B-</option>
	  <option value="2.67">C+</option>
	  <option value="2.33">C</option>
	  <option value="2.00">C-</option>
	  <option value="1.67">D</option>
	  <option value="1.00">E+</option>
	  <option value="0.67">E</option>
	  <option value="0.00">F</option>
	  <option selected>None</option>
	</select>
 </td>
 <td id="module17" style="text-align:center;"></td>
 </tr>
</table>
<table style="width:auto;height:50px;">
	<tr>
		<td><b>SEMESTER CREDITS ATTEMPTED:</b></td>
		<td><b><p id="sem3CreditsAttempted"></p></b></td>
	</tr>
	<tr>
		<td><b>SEMESTER CREDITS EARNED:</b></td>
		<td><b><p id="sem3CreditsEarned"></p></b></td>
	</tr>
	<tr>
		<td><b>SEMESTER GPA:</b></td>
		<td><b><p id="sem3GPA"></p></b></td>
	</tr>
	<tr>
		<td><b>SEMESTER RATING:</b></td>
		<td><b><p id="sem3Rating"></p></b></td>
	</tr>
</table>
</div>
</div>

<div id="wrap">
<div class="right">
<table border ="1">
 <tr>
 <th colspan="5">SEMESTER 4</th>
 </tr>
 <tr>
 <th>Module ID</th>
 <th>Module Name</th>
 <th>Credit Hours</th>
 <th>Grade</th>
 <th>Result</th>
 </tr>
 <tr>
 <td>BCN2023</td>
 <td><b>Data & Network Security</b></td>
 <td style="text-align:center;">3.00</td>
 <td style="text-align:center;">
	<select id="BCN2023" oninput="Result('module18','BCN2023');">
	  <option value="4.00">A</option>
	  <option value="3.70">A-</option>
	  <option value="3.67">B+</option>
	  <option value="3.33">B</option>
	  <option value="3.00">B-</option>
	  <option value="2.67">C+</option>
	  <option value="2.33">C</option>
	  <option value="2.00">C-</option>
	  <option value="1.67">D</option>
	  <option value="1.00">E+</option>
	  <option value="0.67">E</option>
	  <option value="0.00">F</option>
	  <option selected>None</option>
	</select>
 </td>
 <td id="module18" style="text-align:center;"></td>
 </tr>
 <tr>
 <td>BCS2143</td>
 <td><b>Object Orienter Programming</b></td>
 <td style="text-align:center;">3.00</td>
 <td style="text-align:center;">
	<select id="BCS2143" oninput="Result('module19','BCS2143');">
	  <option value="4.00">A</option>
	  <option value="3.70">A-</option>
	  <option value="3.67">B+</option>
	  <option value="3.33">B</option>
	  <option value="3.00">B-</option>
	  <option value="2.67">C+</option>
	  <option value="2.33">C</option>
	  <option value="2.00">C-</option>
	  <option value="1.67">D</option>
	  <option value="1.00">E+</option>
	  <option value="0.67">E</option>
	  <option value="0.00">F</option>
	  <option selected>None</option>
	</select>
 </td>
 <td id="module19" style="text-align:center;"></td>
 </tr>
 <tr>
 <td>BCS2283</td>
 <td><b>Introduction to Software Engineering</b></td>
 <td style="text-align:center;">3.00</td>
 <td style="text-align:center;">
	<select id="BCS2283" oninput="Result('module20','BCS2283');">
	  <option value="4.00">A</option>
	  <option value="3.70">A-</option>
	  <option value="3.67">B+</option>
	  <option value="3.33">B</option>
	  <option value="3.00">B-</option>
	  <option value="2.67">C+</option>
	  <option value="2.33">C</option>
	  <option value="2.00">C-</option>
	  <option value="1.67">D</option>
	  <option value="1.00">E+</option>
	  <option value="0.67">E</option>
	  <option value="0.00">F</option>
	  <option selected>None</option>
	</select>
 </td>
 <td id="module20" style="text-align:center;"></td>
 </tr>
 <tr>
 <td>BCS2303</td>
 <td><b>Web Scripting</b></td>
 <td style="text-align:center;">3.00</td>
 <td style="text-align:center;">
	<select id="BCS2303" oninput="Result('module21','BCS2303');">
	  <option value="4.00">A</option>
	  <option value="3.70">A-</option>
	  <option value="3.67">B+</option>
	  <option value="3.33">B</option>
	  <option value="3.00">B-</option>
	  <option value="2.67">C+</option>
	  <option value="2.33">C</option>
	  <option value="2.00">C-</option>
	  <option value="1.67">D</option>
	  <option value="1.00">E+</option>
	  <option value="0.67">E</option>
	  <option value="0.00">F</option>
	  <option selected>None</option>
	</select>
 </td>
 <td id="module21" style="text-align:center;"></td>
 </tr>
 <tr>
 <td>BUM2226</td>
 <td><b>Differential Equation</b></td>
 <td style="text-align:center;">2.00</td>
 <td style="text-align:center;">
	<select id="BUM2226" oninput="Result('module22','BUM2226');">
	  <option value="4.00">A</option>
	  <option value="3.70">A-</option>
	  <option value="3.67">B+</option>
	  <option value="3.33">B</option>
	  <option value="3.00">B-</option>
	  <option value="2.67">C+</option>
	  <option value="2.33">C</option>
	  <option value="2.00">C-</option>
	  <option value="1.67">D</option>
	  <option value="1.00">E+</option>
	  <option value="0.67">E</option>
	  <option value="0.00">F</option>
	  <option selected>None</option>
	</select>
 </td>
 <td id="module22" style="text-align:center;"></td>
 </tr>
 <tr>
 <td>UGE2002-C</td>
 <td><b>Technopreneurship</b></td>
 <td style="text-align:center;">1.00</td>
 <td style="text-align:center;">
	<select id="UGE2002-C" oninput="Result('module23','UGE2002-C');">
	  <option value="4.00">A</option>
	  <option value="3.70">A-</option>
	  <option value="3.67">B+</option>
	  <option value="3.33">B</option>
	  <option value="3.00">B-</option>
	  <option value="2.67">C+</option>
	  <option value="2.33">C</option>
	  <option value="2.00">C-</option>
	  <option value="1.67">D</option>
	  <option value="1.00">E+</option>
	  <option value="0.67">E</option>
	  <option value="0.00">F</option>
	  <option selected>None</option>
	</select>
 </td>
 <td id="module23" style="text-align:center;"></td>
 </tr>
</table>
<table style="width:auto;height:50px;">
	<tr>
		<td><b>SEMESTER CREDITS ATTEMPTED:</b></td>
		<td><b><p id="sem4CreditsAttempted"></p></b></td>
	</tr>
	<tr>
		<td><b>SEMESTER CREDITS EARNED:</b></td>
		<td><b><p id="sem4CreditsEarned"></p></b></td>
	</tr>
	<tr>
		<td><b>SEMESTER GPA:</b></td>
		<td><b><p id="sem4GPA"></p></b></td>
	</tr>
	<tr>
		<td><b>SEMESTER RATING:</b></td>
		<td><b><p id="sem4Rating"></p></b></td>
	</tr>
</table>
</div>
</div>

<div id="wrap">
<div class="left">
<table border ="1">
 <tr>
 <th colspan="5">SEMESTER 5</th>
 </tr>
 <tr>
 <th style="width:80px;">Module ID</th>
 <th>Module Name</th>
 <th>Credit Hours</th>
 <th>Grade</th>
 <th>Result</th>
 </tr>
 <tr>
 <td>BCM2043</td>
 <td><b>Multimedia Technology & Applications</b></td>
 <td style="text-align:center;">3.00</td>
 <td style="text-align:center;">
	<select id="BCM2043" oninput="Result('module24','BCM2043');">
	  <option value="4.00">A</option>
	  <option value="3.70">A-</option>
	  <option value="3.67">B+</option>
	  <option value="3.33">B</option>
	  <option value="3.00">B-</option>
	  <option value="2.67">C+</option>
	  <option value="2.33">C</option>
	  <option value="2.00">C-</option>
	  <option value="1.67">D</option>
	  <option value="1.00">E+</option>
	  <option value="0.67">E</option>
	  <option value="0.00">F</option>
	  <option selected>None</option>
	</select>
 </td>
 <td id="module24" style="text-align:center;"></td>
 </tr>
 <tr>
 <td>BCN3133</td>
 <td><b>Computer Ethic & Policies</b></td>
 <td style="text-align:center;">3.00</td>
 <td style="text-align:center;">
	<select id="BCN3133" oninput="Result('module25','BCN3133');">
	  <option value="4.00">A</option>
	  <option value="3.70">A-</option>
	  <option value="3.67">B+</option>
	  <option value="3.33">B</option>
	  <option value="3.00">B-</option>
	  <option value="2.67">C+</option>
	  <option value="2.33">C</option>
	  <option value="2.00">C-</option>
	  <option value="1.67">D</option>
	  <option value="1.00">E+</option>
	  <option value="0.67">E</option>
	  <option value="0.00">F</option>
	  <option selected>None</option>
	</select>
 </td>
 <td id="module25" style="text-align:center;"></td>
 </tr>
 <tr>
 <td>BCS2203</td>
 <td><b>Web Application Development</b></td>
 <td style="text-align:center;">3.00</td>
 <td style="text-align:center;">
	<select id="BCS2203" oninput="Result('module26','BCS2203');">
	  <option value="4.00">A</option>
	  <option value="3.70">A-</option>
	  <option value="3.67">B+</option>
	  <option value="3.33">B</option>
	  <option value="3.00">B-</option>
	  <option value="2.67">C+</option>
	  <option value="2.33">C</option>
	  <option value="2.00">C-</option>
	  <option value="1.67">D</option>
	  <option value="1.00">E+</option>
	  <option value="0.67">E</option>
	  <option value="0.00">F</option>
	  <option selected>None</option>
	</select>
 </td>
 <td id="module26" style="text-align:center;"></td>
 </tr>
 <tr>
 <td>BCS2313</td>
 <td><b>Artificial Intelligence</b></td>
 <td style="text-align:center;">3.00</td>
 <td style="text-align:center;">
	<select id="BCS2313" oninput="Result('module27','BCS2313');">
	  <option value="4.00">A</option>
	  <option value="3.70">A-</option>
	  <option value="3.67">B+</option>
	  <option value="3.33">B</option>
	  <option value="3.00">B-</option>
	  <option value="2.67">C+</option>
	  <option value="2.33">C</option>
	  <option value="2.00">C-</option>
	  <option value="1.67">D</option>
	  <option value="1.00">E+</option>
	  <option value="0.67">E</option>
	  <option value="0.00">F</option>
	  <option selected>None</option>
	</select>
 </td>
 <td id="module27" style="text-align:center;"></td>
 </tr>
 <tr>
 <td>BCS2333</td>
 <td><b>Software Planning & Requirement Workshop</b></td>
 <td style="text-align:center;">3.00</td>
 <td style="text-align:center;">
	<select id="BCS2333" oninput="Result('module28','BCS2333');">
	  <option value="4.00">A</option>
	  <option value="3.70">A-</option>
	  <option value="3.67">B+</option>
	  <option value="3.33">B</option>
	  <option value="3.00">B-</option>
	  <option value="2.67">C+</option>
	  <option value="2.33">C</option>
	  <option value="2.00">C-</option>
	  <option value="1.67">D</option>
	  <option value="1.00">E+</option>
	  <option value="0.67">E</option>
	  <option value="0.00">F</option>
	  <option selected>None</option>
	</select>
 </td>
 <td id="module28" style="text-align:center;"></td>
 </tr>
</table>
<table style="width:auto;height:50px;">
	<tr>
		<td><b>SEMESTER CREDITS ATTEMPTED:</b></td>
		<td><b><p id="sem5CreditsAttempted"></p></b></td>
	</tr>
	<tr>
		<td><b>SEMESTER CREDITS EARNED:</b></td>
		<td><b><p id="sem5CreditsEarned"></p></b></td>
	</tr>
	<tr>
		<td><b>SEMESTER GPA:</b></td>
		<td><b><p id="sem5GPA"></p></b></td>
	</tr>
	<tr>
		<td><b>SEMESTER RATING:</b></td>
		<td><b><p id="sem5Rating"></p></b></td>
	</tr>
</table>
</div>
</div>

<div id="wrap">
<div class="right">
<table border ="1">
 <tr>
 <th colspan="5">SEMESTER 6</th>
 </tr>
 <tr>
 <th>Module ID</th>
 <th>Module Name</th>
 <th>Credit Hours</th>
 <th>Grade</th>
 <th>Result</th>
 </tr>
 <tr>
 <td>BCM2053</td>
 <td><b>Computer Graphics</b></td>
 <td style="text-align:center;">3.00</td>
 <td style="text-align:center;">
	<select id="BCM2053" oninput="Result('module29','BCM2053');">
	  <option value="4.00">A</option>
	  <option value="3.70">A-</option>
	  <option value="3.67">B+</option>
	  <option value="3.33">B</option>
	  <option value="3.00">B-</option>
	  <option value="2.67">C+</option>
	  <option value="2.33">C</option>
	  <option value="2.00">C-</option>
	  <option value="1.67">D</option>
	  <option value="1.00">E+</option>
	  <option value="0.67">E</option>
	  <option value="0.00">F</option>
	  <option selected>None</option>
	</select>
 </td>
 <td id="module29" style="text-align:center;"></td>
 </tr>
 <tr>
 <td>BCM3143</td>
 <td><b>Computer Game Programming</b></td>
 <td style="text-align:center;">3.00</td>
 <td style="text-align:center;">
	<select id="BCM3143" oninput="Result('module30','BCM3143');">
	  <option value="4.00">A</option>
	  <option value="3.70">A-</option>
	  <option value="3.67">B+</option>
	  <option value="3.33">B</option>
	  <option value="3.00">B-</option>
	  <option value="2.67">C+</option>
	  <option value="2.33">C</option>
	  <option value="2.00">C-</option>
	  <option value="1.67">D</option>
	  <option value="1.00">E+</option>
	  <option value="0.67">E</option>
	  <option value="0.00">F</option>
	  <option selected>None</option>
	</select>
 </td>
 <td id="module30" style="text-align:center;"></td>
 </tr>
 <tr>
 <td>BCS2343</td>
 <td><b>Software Design Workshop</b></td>
 <td style="text-align:center;">3.00</td>
 <td style="text-align:center;">
	<select id="BCS2343" oninput="Result('module31','BCS2343');">
	  <option value="4.00">A</option>
	  <option value="3.70">A-</option>
	  <option value="3.67">B+</option>
	  <option value="3.33">B</option>
	  <option value="3.00">B-</option>
	  <option value="2.67">C+</option>
	  <option value="2.33">C</option>
	  <option value="2.00">C-</option>
	  <option value="1.67">D</option>
	  <option value="1.00">E+</option>
	  <option value="0.67">E</option>
	  <option value="0.00">F</option>
	  <option selected>None</option>
	</select>
 </td>
 <td id="module31" style="text-align:center;"></td>
 </tr>
 <tr>
 <td>BCS3283</td>
 <td><b>Mobile Application Development</b></td>
 <td style="text-align:center;">3.00</td>
 <td style="text-align:center;">
	<select id="BCS3283" oninput="Result('module32','BCS3283');">
	  <option value="4.00">A</option>
	  <option value="3.70">A-</option>
	  <option value="3.67">B+</option>
	  <option value="3.33">B</option>
	  <option value="3.00">B-</option>
	  <option value="2.67">C+</option>
	  <option value="2.33">C</option>
	  <option value="2.00">C-</option>
	  <option value="1.67">D</option>
	  <option value="1.00">E+</option>
	  <option value="0.67">E</option>
	  <option value="0.00">F</option>
	  <option selected>None</option>
	</select>
 </td>
 <td id="module32" style="text-align:center;"></td>
 </tr>
 <tr>
 <td>BCS3293</td>
 <td><b>Software Configuration Management</b></td>
 <td style="text-align:center;">3.00</td>
 <td style="text-align:center;">
	<select id="BCS3293" oninput="Result('module33','BCS3293');">
	  <option value="4.00">A</option>
	  <option value="3.70">A-</option>
	  <option value="3.67">B+</option>
	  <option value="3.33">B</option>
	  <option value="3.00">B-</option>
	  <option value="2.67">C+</option>
	  <option value="2.33">C</option>
	  <option value="2.00">C-</option>
	  <option value="1.67">D</option>
	  <option value="1.00">E+</option>
	  <option value="0.67">E</option>
	  <option value="0.00">F</option>
	  <option selected>None</option>
	</select>
 </td>
 <td id="module33" style="text-align:center;"></td>
 </tr>
</table>
<table style="width:auto;height:50px;">
	<tr>
		<td><b>SEMESTER CREDITS ATTEMPTED:</b></td>
		<td><b><p id="sem6CreditsAttempted"></p></b></td>
	</tr>
	<tr>
		<td><b>SEMESTER CREDITS EARNED:</b></td>
		<td><b><p id="sem6CreditsEarned"></p></b></td>
	</tr>
	<tr>
		<td><b>SEMESTER GPA:</b></td>
		<td><b><p id="sem6GPA"></p></b></td>
	</tr>
	<tr>
		<td><b>SEMESTER RATING:</b></td>
		<td><b><p id="sem6Rating"></p></b></td>
	</tr>
</table>
</div>
</div>

<div id="wrap">
<div class="left">
<table border ="1">
 <tr>
 <th colspan="5">SEMESTER 7</th>
 </tr>
 <tr>
 <th>Module ID</th>
 <th>Module Name</th>
 <th>Credit Hours</th>
 <th>Grade</th>
 <th>Result</th>
 </tr>
 <tr>
 <td>BCM2063</td>
 <td><b>Image Processing</b></td>
 <td style="text-align:center;">3.00</td>
 <td style="text-align:center;">
	<select id="BCM2063" oninput="Result('module34','BCM2063');">
	  <option value="4.00">A</option>
	  <option value="3.70">A-</option>
	  <option value="3.67">B+</option>
	  <option value="3.33">B</option>
	  <option value="3.00">B-</option>
	  <option value="2.67">C+</option>
	  <option value="2.33">C</option>
	  <option value="2.00">C-</option>
	  <option value="1.67">D</option>
	  <option value="1.00">E+</option>
	  <option value="0.67">E</option>
	  <option value="0.00">F</option>
	  <option selected>None</option>
	</select>
 </td>
 <td id="module34" style="text-align:center;"></td>
 </tr>
 <tr>
 <td>BCS3113</td>
 <td><b>Zend PhP</b></td>
 <td style="text-align:center;">3.00</td>
 <td style="text-align:center;">
	<select id="BCS3113" oninput="Result('module35','BCS3113');">
	  <option value="4.00">A</option>
	  <option value="3.70">A-</option>
	  <option value="3.67">B+</option>
	  <option value="3.33">B</option>
	  <option value="3.00">B-</option>
	  <option value="2.67">C+</option>
	  <option value="2.33">C</option>
	  <option value="2.00">C-</option>
	  <option value="1.67">D</option>
	  <option value="1.00">E+</option>
	  <option value="0.67">E</option>
	  <option value="0.00">F</option>
	  <option selected>None</option>
	</select>
 </td>
 <td id="module35" style="text-align:center;"td>
 </tr>
 <tr>
 <td>BCS3323</td>
 <td><b>Software Testing and Maintenance</b></td>
 <td style="text-align:center;">3.00</td>
 <td style="text-align:center;">
	<select id="BCS3323" oninput="Result('module36','BCS3323');">
	  <option value="4.00">A</option>
	  <option value="3.70">A-</option>
	  <option value="3.67">B+</option>
	  <option value="3.33">B</option>
	  <option value="3.00">B-</option>
	  <option value="2.67">C+</option>
	  <option value="2.33">C</option>
	  <option value="2.00">C-</option>
	  <option value="1.67">D</option>
	  <option value="1.00">E+</option>
	  <option value="0.67">E</option>
	  <option value="0.00">F</option>
	  <option selected>None</option>
	</select>
 </td>
 <td id="module36" style="text-align:center;"></td>
 </tr>
 <tr>
 <td>BCS2213</td>
 <td><b>Formal Method</b></td>
 <td style="text-align:center;">3.00</td>
 <td style="text-align:center;">
	<select id="BCS2213" oninput="Result('module37','BCS2213');">
	  <option value="4.00">A</option>
	  <option value="3.70">A-</option>
	  <option value="3.67">B+</option>
	  <option value="3.33">B</option>
	  <option value="3.00">B-</option>
	  <option value="2.67">C+</option>
	  <option value="2.33">C</option>
	  <option value="2.00">C-</option>
	  <option value="1.67">D</option>
	  <option value="1.00">E+</option>
	  <option value="0.67">E</option>
	  <option value="0.00">F</option>
	  <option selected>None</option>
	</select>
 </td>
 <td id="module37" style="text-align:center;"></td>
 </tr>
 <tr>
 <td>BCC3013</td>
 <td><b>Undergraduate Project I</b></td>
 <td style="text-align:center;">3.00</td>
 <td style="text-align:center;">
	<select id="BCC3013" oninput="Result('module38','BCC3013');">
	  <option value="4.00">A</option>
	  <option value="3.70">A-</option>
	  <option value="3.67">B+</option>
	  <option value="3.33">B</option>
	  <option value="3.00">B-</option>
	  <option value="2.67">C+</option>
	  <option value="2.33">C</option>
	  <option value="2.00">C-</option>
	  <option value="1.67">D</option>
	  <option value="1.00">E+</option>
	  <option value="0.67">E</option>
	  <option value="0.00">F</option>
	  <option selected>None</option>
	</select>
 </td>
 <td id="module38" style="text-align:center;"></td>
 </tr>
</table>
<table style="width:auto;height:50px;">
	<tr>
		<td><b>SEMESTER CREDITS ATTEMPTED:</b></td>
		<td><b><p id="sem7CreditsAttempted"></p></b></td>
	</tr>
	<tr>
		<td><b>SEMESTER CREDITS EARNED:</b></td>
		<td><b><p id="sem7CreditsEarned"></p></b></td>
	</tr>
	<tr>
		<td><b>SEMESTER GPA:</b></td>
		<td><b><p id="sem7GPA"></p></b></td>
	</tr>
	<tr>
		<td><b>SEMESTER RATING:</b></td>
		<td><b><p id="sem7Rating"></p></b></td>
	</tr>
</table>
</div>
</div>

<div id="wrap">
<div class="right">
<table border ="1">
 <tr>
 <th colspan="5">SEMESTER 8</th>
 </tr>
 <tr>
 <th>Module ID</th>
 <th>Module Name</th>
 <th>Credit Hours</th>
 <th>Grade</th>
 <th>Result</th>
 </tr>
 <tr>
 <td>BCI3913</td>
 <td><b>Structured Query Language</b></td>
 <td style="text-align:center;">3.00</td>
 <td style="text-align:center;">
	<select id="BCI3913" oninput="Result('module39','BCI3913');">
	  <option value="4.00">A</option>
	  <option value="3.70">A-</option>
	  <option value="3.67">B+</option>
	  <option value="3.33">B</option>
	  <option value="3.00">B-</option>
	  <option value="2.67">C+</option>
	  <option value="2.33">C</option>
	  <option value="2.00">C-</option>
	  <option value="1.67">D</option>
	  <option value="1.00">E+</option>
	  <option value="0.67">E</option>
	  <option value="0.00">F</option>
	  <option selected>None</option>
	</select>
 </td>
 <td id="module39" style="text-align:center;"></td>
 </tr>
 <tr>
 <td>BCM3153</td>
 <td><b>Visual Effects & 3D Animation</b></td>
 <td style="text-align:center;">3.00</td>
 <td style="text-align:center;">
	<select id="BCM3153" oninput="Result('module40','BCM3153');">
	  <option value="4.00">A</option>
	  <option value="3.70">A-</option>
	  <option value="3.67">B+</option>
	  <option value="3.33">B</option>
	  <option value="3.00">B-</option>
	  <option value="2.67">C+</option>
	  <option value="2.33">C</option>
	  <option value="2.00">C-</option>
	  <option value="1.67">D</option>
	  <option value="1.00">E+</option>
	  <option value="0.67">E</option>
	  <option value="0.00">F</option>
	  <option selected>None</option>
	</select>
 </td>
 <td id="module40" style="text-align:center;"></td>
 </tr>
 <tr>
 <td>BCS3263</td>
 <td><b>Software Quality Assurance</b></td>
 <td style="text-align:center;">3.00</td>
 <td style="text-align:center;">
	<select id="BCS3263" oninput="Result('module41','BCS3263');">
	  <option value="4.00">A</option>
	  <option value="3.70">A-</option>
	  <option value="3.67">B+</option>
	  <option value="3.33">B</option>
	  <option value="3.00">B-</option>
	  <option value="2.67">C+</option>
	  <option value="2.33">C</option>
	  <option value="2.00">C-</option>
	  <option value="1.67">D</option>
	  <option value="1.00">E+</option>
	  <option value="0.67">E</option>
	  <option value="0.00">F</option>
	  <option selected>None</option>
	</select>
 </td>
 <td id="module41" style="text-align:center;"></td>
 </tr>
 <tr>
 <td>BCC3026</td>
 <td><b>Undergraduate Project II</b></td>
 <td style="text-align:center;">6.00</td>
 <td style="text-align:center;">
	<select id="BCC3026" oninput="Result('module42','BCC3026');">
	  <option value="4.00">A</option>
	  <option value="3.70">A-</option>
	  <option value="3.67">B+</option>
	  <option value="3.33">B</option>
	  <option value="3.00">B-</option>
	  <option value="2.67">C+</option>
	  <option value="2.33">C</option>
	  <option value="2.00">C-</option>
	  <option value="1.67">D</option>
	  <option value="1.00">E+</option>
	  <option value="0.67">E</option>
	  <option value="0.00">F</option>
	  <option selected>None</option>
	</select>
 </td>
 <td id="module42" style="text-align:center;"></td>
 </tr>
</table>
<table style="width:auto;height:50px;">
	<tr>
		<td><b>SEMESTER CREDITS ATTEMPTED:</b></td>
		<td><b><p id="sem8CreditsAttempted"></p></b></td>
	</tr>
	<tr>
		<td><b>SEMESTER CREDITS EARNED:</b></td>
		<td><b><p id="sem8CreditsEarned"></p></b></td>
	</tr>
	<tr>
		<td><b>SEMESTER GPA:</b></td>
		<td><b><p id="sem8GPA"></p></b></td>
	</tr>
	<tr>
		<td><b>SEMESTER RATING:</b></td>
		<td><b><p id="sem8Rating"></p></b></td>
	</tr>
</table>
</div>
</div>
<hr style="width:1200px;">
<div id="wrap">
<div class="left">
<table style="width:auto;height:50px;">
	<tr>
		<td><b>CUMULATIVE CREDITS ATTEMPT:</b></td>
		<td><b><p id="cumulativeCreditsAttempt"></p></b><td>
	</tr>
	<tr>
		<td><b>CUMULATIVE CREDITS EARNED:</b></td>
		<td><b><p id="cumulativeCreditsEarned"></p></b><td>
	</tr>
	<tr>
		<td><b>CUMULATIVE GPA:</b></td>
		<td><b><p id="cumulativeGPA"></p></b><td>
	</tr>
	<tr>
		<td><b>CUMULATIVE RATING:</b></td>
		<td><b><p id="cumulativeRating"></p></b><td>
	</tr>
	<tr>
		<td><input type="submit" value="Display Results" onclick="return Calculate();"></td>
	</tr>
</table>
</div>
</div>
</form>

 </body>
</html>