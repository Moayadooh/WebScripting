<?php

	/**
	 * Instruction:
	 * - Please enter five module information for each semester.
	 * - Module name data type must be string.
	 * - Module credit and module score data type must be integer.
	 * - Please enter valid information as mentioned in the instruction to get correct output.
	 * - If you want to display information for less than five module, you can enter valid information for only less then five modules.
	 * - If you want to display information for more then five module per semester, please contact me at 15128@email.muscatcollege.edu.om, I will be happy to help you (:
	 * 
	 * Note:
	 * - If you enter wrong information for one or more modules, the program will not display information of that modules.
	 * - Please don't use 'null' key word as invalid information for module score, because PHP will read 'null' key word as zero, I don't know why ):
	 */

	//Semester 1 modules name
	$Sem1_Module1_Name = "Formal Methods";
	$Sem1_Module2_Name = "Image Processing";
	$Sem1_Module3_Name = "Zend PHP";
	$Sem1_Module4_Name = "Software Testing & Maintenance";
	$Sem1_Module5_Name = "Undergraduate Project I";
	//Semester 1 modules credits (1<=Credit<=9)
	$Sem1_Module1_Credit = 2;
	$Sem1_Module2_Credit = 3;
	$Sem1_Module3_Credit = 6;
	$Sem1_Module4_Credit = -1;
	$Sem1_Module5_Credit = 3;
	//Semester 1 modules scores (0<=Score<=100)
	$Sem1_Module1_score = 77;
	$Sem1_Module2_score = 70;
	$Sem1_Module3_score = 55;
	$Sem1_Module4_score = 77;
	$Sem1_Module5_score = 79;
	
	
	//Semester 2 modules name
	$Sem2_Module1_Name = "Structured Query Language";
	$Sem2_Module2_Name = "Visual Effects & 3D Animation";
	$Sem2_Module3_Name = "Software Quality Assurance";
	$Sem2_Module4_Name = "Undergraduate Project II";
	$Sem2_Module5_Name = -1;
	//Semester 2 modules credits (1<=Credit<=9)
	$Sem2_Module1_Credit = 3;
	$Sem2_Module2_Credit = 3;
	$Sem2_Module3_Credit = 3;
	$Sem2_Module4_Credit = 6;
	$Sem2_Module5_Credit = -1;
	//Semester 2 modules scores (0<=Score<=100)
	$Sem2_Module1_score = 80;
	$Sem2_Module2_score = 95;
	$Sem2_Module3_score = 44;
	$Sem2_Module4_score = 62;
	$Sem2_Module5_score = -1;
	
	
	#Input semester number
	$select_Semester = 1;
	
	$academic_Year = ["SEMESTER 1","SEMESTER 2"];
	switch($select_Semester)
	{
		case 1:
		    //Start the table
			echo "<table border='1'>";
			
			//Print semester number as table head in the first row
			echo "<tr><th colspan='6'>".$academic_Year[0]."</th></tr>";
			
			//Call "Calculation" function
			Calculation($Sem1_Module1_Name,$Sem1_Module2_Name,$Sem1_Module3_Name,$Sem1_Module4_Name,$Sem1_Module5_Name,$Sem1_Module1_score,$Sem1_Module2_score,$Sem1_Module3_score,$Sem1_Module4_score,$Sem1_Module5_score,$Sem1_Module1_Credit,$Sem1_Module2_Credit,$Sem1_Module3_Credit,$Sem1_Module4_Credit,$Sem1_Module5_Credit);
		break;
		
		case 2:
			echo "<table border='1'>";
			echo "<tr><th colspan='6'>".$academic_Year[1]."</th></tr>";
			Calculation($Sem2_Module1_Name,$Sem2_Module2_Name,$Sem2_Module3_Name,$Sem2_Module4_Name,$Sem2_Module5_Name,$Sem2_Module1_score,$Sem2_Module2_score,$Sem2_Module3_score,$Sem2_Module4_score,$Sem2_Module5_score,$Sem2_Module1_Credit,$Sem2_Module2_Credit,$Sem2_Module3_Credit,$Sem2_Module4_Credit,$Sem2_Module5_Credit);
		break;
		
		default:
			echo "Invalid Selection";
		break;
	}
	
	function Calculation($Module1Name,$Module2Name,$Module3Name,$Module4Name,$Module5Name,$Module1score,$Module2score,$Module3score,$Module4score,$Module5score,$Module1_Credit,$Module2_Credit,$Module3_Credit,$Module4_Credit,$Module5_Credit)
	{
		//Indexed array to store modules names
		$modules = array($Module1Name,$Module2Name,$Module3Name,$Module4Name,$Module5Name);
		
		//Associative array to store credit value for each module "The key for each module is module name"
		$credits_Per_Module = array($Module4Name=>$Module4_Credit,$Module2Name=>$Module2_Credit,$Module5Name=>$Module5_Credit,$Module1Name=>$Module1_Credit,$Module3Name=>$Module3_Credit);
		
		//Indexed array to store the score for each module
		$score_Per_Module = array($Module1score,$Module2score,$Module3score,$Module4score,$Module5score);
		
		//Initialize the variables
		$totalCreditsAttempt = 0;
		$totalCreditsEarned = 0;
		$cumulativeGPA = 0;
		$i = 0;
		
		//Print content titles as table head in the second row
		echo "<tr><th>Module Name</th>";
		echo "<th>Credit Hours</th>";
		echo "<th>Score</th>";
		echo "<th>Grade</th>";
		echo "<th>GPA</th>";
		echo "<th>Result</th></tr>";
		
		//Calculate modules infromation
		foreach ($score_Per_Module as $score)
		{
			//Ignore calculation if module name is not a string
			if (!is_string($modules[$i]))
			{
				$i++;
				continue;
			}
			
			//Ignore calculation if credit value is not an integer or is not valid
			$credit = $credits_Per_Module[$modules[$i]];
			if ($credit<1 || $credit>9 || !is_int($credit))
			{
				$i++;
				continue;
			}
			
			//Ignore calculation if score value is not an integer
			if (!is_int($score))
			{
				$i++;
				continue;
			}
			
			//Determine module grade based on the score
			if($score>=80 && $score<=100)
				$grade = 'A';
			elseif($score>=77 && $score<=79)
				$grade = 'A-';
			elseif($score>=74 && $score<=76)
				$grade = 'B+';
			elseif($score>=70 && $score<=73)
				$grade = 'B';
			elseif($score>=67 && $score<=69)
				$grade = 'B-';
			elseif($score>=64 && $score<=66)
				$grade = 'C+';
			elseif($score>=61 && $score<=63)
				$grade = 'C';
			elseif($score>=58 && $score<=60)
				$grade = 'C-';
			elseif($score>=55 && $score<=57)
				$grade = 'D';
			elseif($score>=40 && $score<=54)
				$grade = 'E+';
			elseif($score>=25 && $score<=39)
				$grade = 'E';
			elseif($score>=0 && $score<=24)
				$grade = 'F';
			else{
				$i++;
				continue; //Ignore calculation if score value is not valid
			}
			
			//Determine module GPA based on the grade
			switch ($grade)
			{
				case 'A':
					$GPA = 4;
				break;
				case 'A-':
					$GPA = 3.70;
				break;
				case 'B+':
					$GPA = 3.67;
				break;
				case 'B':
					$GPA = 3.33;
				break;
				case 'B-':
					$GPA = 3;
				break;
				case 'C+':
					$GPA = 2.67;
				break;
				case 'C':
					$GPA = 2.33;
				break;
				case 'C-':
					$GPA = 2;
				break;
				case 'D':
					$GPA = 1.67;
				break;
				case 'E+':
					$GPA = 1;
				break;
				case 'E':
					$GPA = 0.67;
				break;
				case 'F':
					$GPA = 0;
				break;
				default:
					echo "Invalid Grade";
				break;
			}
			
			//Determine module result based on the score, whether 'Pass' or 'Fail'
			if ($score>=58 && $score<=100){
				$totalCreditsEarned += $credit;  //Add credit to total credit earned of the semester
				$result = 'Pass';
			}
			else
				$result = 'Fail';
			
			$cumulativeGPA += (double)$GPA * $credit; //Multiply GPA into credit and add the total in '$cumulativeGPA' variable
			$totalCreditsAttempt += $credit; //Add credit to total credit attempt of the semester
			
			//Print module information
			echo "<tr><td style='width:300px;'><b>$modules[$i]</b></td>";
			echo "<td style='width:130px;text-align:center;'>$credit</td>";
			echo "<td style='width:130px;text-align:center;'>$score</td>";
			echo "<td style='width:130px;text-align:center;'>$grade</td>";
			echo "<td style='width:130px;text-align:center;'>$GPA</td>";
			echo "<td style='width:130px;text-align:center;'>$result</td></tr>";
			$i++; //iteration
		}
		echo "</table>";
		
		$cumulativeGPA /= $totalCreditsAttempt; //Calculate cumulative GPA value of the semester
		
		//Determine cumulative rating based on the cumulative GPA value of the semester
		if ($cumulativeGPA>=3.67)
			$rating = 'Excellent Standing';
		elseif ($cumulativeGPA>=2 && $cumulativeGPA<3.67)
			$rating = 'Good Standing';
		else 
			$rating = 'Probation / Fail Standing';
		
		//Print cumulative semester information
		echo "<table>";
		echo "<tr><td><b>CUMULATIVE CREDITS ATTEMPT:</b></td><td><b>$totalCreditsAttempt</b></td></tr>";
		echo "<tr><td><b>CUMULATIVE CREDITS EARNED: </b></td><td><b>$totalCreditsEarned</b></td></tr>";
		echo "<tr><td><b>CUMULATIVE GPA:</b></td><td><b>$cumulativeGPA</b></td></tr>";
		echo "<tr><td><b>CUMULATIVE RATING:</b></td><td><b>$rating</b></td></tr>";
		echo "</table>"; //Close the table
	}

?>