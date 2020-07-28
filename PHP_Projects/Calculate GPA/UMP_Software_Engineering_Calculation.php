<?php
	
	function CalculateGPA($moduleID,$credits)
	{
		if(isset($_POST[$moduleID]) && is_numeric($_POST[$moduleID]))
		{
			return $_POST[$moduleID]*$credits;
		}
		return 0;
	}
	function CalculateCreditsAttempted($moduleID,$credits)
	{
		if(isset($_POST[$moduleID]) && is_numeric($_POST[$moduleID]))
		{
			return $credits;
		}
		return 0;
	}
	function CalculateCreditsEarned($moduleID,$credits)
	{
		if(isset($_POST[$moduleID]) && is_numeric($_POST[$moduleID]))
		{
			if($_POST[$moduleID]>=2.0)
			{
				return $credits;
			}
			else
				return 0;
		}
		return 0;
	}
	
	//Semester 1
	$sem1GPA = 0;
	$sem1CreditsAttempted = 0;
	$sem1CreditsEarned = 0;
	//ICT Competency Workshop
	$sem1GPA += CalculateGPA('BCC1012',3);
	$sem1CreditsAttempted += CalculateCreditsAttempted('BCC1012',3);
	$sem1CreditsEarned += CalculateCreditsEarned('BCC1012',3);
	//Application Development Workshop
	$sem1GPA += CalculateGPA('BCC1032',3);
	$sem1CreditsAttempted += CalculateCreditsAttempted('BCC1032',3);
	$sem1CreditsEarned += CalculateCreditsEarned('BCC1032',3);
	//Computer Architecture & Organization
	$sem1GPA += CalculateGPA('BCN1043',3);
	$sem1CreditsAttempted += CalculateCreditsAttempted('BCN1043',3);
	$sem1CreditsEarned += CalculateCreditsEarned('BCN1043',3);
	//Problem Solving
	$sem1GPA += CalculateGPA('BCS1143',3);
	$sem1CreditsAttempted += CalculateCreditsAttempted('BCS1143',3);
	$sem1CreditsEarned += CalculateCreditsEarned('BCS1143',3);
	//Fundamental Discrete Structure
	$sem1GPA += CalculateGPA('BUM1213',2);
	$sem1CreditsAttempted += CalculateCreditsAttempted('BUM1213',2);
	$sem1CreditsEarned += CalculateCreditsEarned('BUM1213',2);
	
	
	//Semester 2
	$sem2GPA = 0;
	$sem2CreditsAttempted = 0;
	$sem2CreditsEarned = 0;
	//Database Systems
	$sem2GPA += CalculateGPA('BCI2023',3);
	$sem2CreditsAttempted += CalculateCreditsAttempted('BCI2023',3);
	$sem2CreditsEarned += CalculateCreditsEarned('BCI2023',3);
	//LAN Workshop
	$sem2GPA += CalculateGPA('BCN1052',3);
	$sem2CreditsAttempted += CalculateCreditsAttempted('BCN1052',3);
	$sem2CreditsEarned += CalculateCreditsEarned('BCN1052',3);
	//Operating Systems
	$sem2GPA += CalculateGPA('BCN2053',3);
	$sem2CreditsAttempted += CalculateCreditsAttempted('BCN2053',3);
	$sem2CreditsEarned += CalculateCreditsEarned('BCN2053',3);
	//Introduction to Programming
	$sem2GPA += CalculateGPA('BCS1023',3);
	$sem2CreditsAttempted += CalculateCreditsAttempted('BCS1023',3);
	$sem2CreditsEarned += CalculateCreditsEarned('BCS1023',3);
	//Discrete Structure & Application
	$sem2GPA += CalculateGPA('BUM1433',2);
	$sem2CreditsAttempted += CalculateCreditsAttempted('BUM1433',2);
	$sem2CreditsEarned += CalculateCreditsEarned('BUM1433',2);
	//Basic Mathematics
	$sem2GPA += CalculateGPA('BUM2220',2);
	$sem2CreditsAttempted += CalculateCreditsAttempted('BUM2220',2);
	$sem2CreditsEarned += CalculateCreditsEarned('BUM2220',2);
	
	
	//Semester 3
	$sem3GPA = 0;
	$sem3CreditsAttempted = 0;
	$sem3CreditsEarned = 0;
	//Data Communication & Networking
	$sem3GPA += CalculateGPA('BCN1053',3);
	$sem3CreditsAttempted += CalculateCreditsAttempted('BCN1053',3);
	$sem3CreditsEarned += CalculateCreditsEarned('BCN1053',3);
	//Data Structure & Algorithms
	$sem3GPA += CalculateGPA('BCS1093',3);
	$sem3CreditsAttempted += CalculateCreditsAttempted('BCS1093',3);
	$sem3CreditsEarned += CalculateCreditsEarned('BCS1093',3);
	//System Analysis & Design
	$sem3GPA += CalculateGPA('BCS1133',3);
	$sem3CreditsAttempted += CalculateCreditsAttempted('BCS1133',3);
	$sem3CreditsEarned += CalculateCreditsEarned('BCS1133',3);
	//Human Computer Interaction
	$sem3GPA += CalculateGPA('BCS2173',3);
	$sem3CreditsAttempted += CalculateCreditsAttempted('BCS2173',3);
	$sem3CreditsEarned += CalculateCreditsEarned('BCS2173',3);
	//Applied Statistics
	$sem3GPA += CalculateGPA('BUM2413-C',2);
	$sem3CreditsAttempted += CalculateCreditsAttempted('BUM2413-C',2);
	$sem3CreditsEarned += CalculateCreditsEarned('BUM2413-C',2);
	//Soft Skills 1
	$sem3GPA += CalculateGPA('UHS1021',1);
	$sem3CreditsAttempted += CalculateCreditsAttempted('UHS1021',1);
	$sem3CreditsEarned += CalculateCreditsEarned('UHS1021',1);
	
	
	//Semester 4
	$sem4GPA = 0;
	$sem4CreditsAttempted = 0;
	$sem4CreditsEarned = 0;
	//Data & Network Security
	$sem4GPA += CalculateGPA('BCN2023',3);
	$sem4CreditsAttempted += CalculateCreditsAttempted('BCN2023',3);
	$sem4CreditsEarned += CalculateCreditsEarned('BCN2023',3);
	//Object Orienter Programming
	$sem4GPA += CalculateGPA('BCS2143',3);
	$sem4CreditsAttempted += CalculateCreditsAttempted('BCS2143',3);
	$sem4CreditsEarned += CalculateCreditsEarned('BCS2143',3);
	//Introduction to Software Engineering
	$sem4GPA += CalculateGPA('BCS2283',3);
	$sem4CreditsAttempted += CalculateCreditsAttempted('BCS2283',3);
	$sem4CreditsEarned += CalculateCreditsEarned('BCS2283',3);
	//Web Scripting
	$sem4GPA += CalculateGPA('BCS2303',3);
	$sem4CreditsAttempted += CalculateCreditsAttempted('BCS2303',3);
	$sem4CreditsEarned += CalculateCreditsEarned('BCS2303',3);
	//Differential Equation
	$sem4GPA += CalculateGPA('BUM2226',2);
	$sem4CreditsAttempted += CalculateCreditsAttempted('BUM2226',2);
	$sem4CreditsEarned += CalculateCreditsEarned('BUM2226',2);
	//Technopreneurship
	$sem4GPA += CalculateGPA('UGE2002-C',1);
	$sem4CreditsAttempted += CalculateCreditsAttempted('UGE2002-C',1);
	$sem4CreditsEarned += CalculateCreditsEarned('UGE2002-C',1);
	
	
	//Semester 5
	$sem5GPA = 0;
	$sem5CreditsAttempted = 0;
	$sem5CreditsEarned = 0;
	//Multimedia Technology & Applications
	$sem5GPA += CalculateGPA('BCM2043',3);
	$sem5CreditsAttempted += CalculateCreditsAttempted('BCM2043',3);
	$sem5CreditsEarned += CalculateCreditsEarned('BCM2043',3);
	//Computer Ethic & Policies
	$sem5GPA += CalculateGPA('BCN3133',3);
	$sem5CreditsAttempted += CalculateCreditsAttempted('BCN3133',3);
	$sem5CreditsEarned += CalculateCreditsEarned('BCN3133',3);
	//Web Application Development
	$sem5GPA += CalculateGPA('BCS2203',3);
	$sem5CreditsAttempted += CalculateCreditsAttempted('BCS2203',3);
	$sem5CreditsEarned += CalculateCreditsEarned('BCS2203',3);
	//Artificial Intelligence
	$sem5GPA += CalculateGPA('BCS2313',3);
	$sem5CreditsAttempted += CalculateCreditsAttempted('BCS2313',3);
	$sem5CreditsEarned += CalculateCreditsEarned('BCS2313',3);
	//Software Planning & Requirement Workshop
	$sem5GPA += CalculateGPA('BCS2333',3);
	$sem5CreditsAttempted += CalculateCreditsAttempted('BCS2333',3);
	$sem5CreditsEarned += CalculateCreditsEarned('BCS2333',3);
	
	
	//Semester 6
	$sem6GPA = 0;
	$sem6CreditsAttempted = 0;
	$sem6CreditsEarned = 0;
	//Computer Graphics
	$sem6GPA += CalculateGPA('BCM2053',3);
	$sem6CreditsAttempted += CalculateCreditsAttempted('BCM2053',3);
	$sem6CreditsEarned += CalculateCreditsEarned('BCM2053',3);
	//Computer Game Programming
	$sem6GPA += CalculateGPA('BCM3143',3);
	$sem6CreditsAttempted += CalculateCreditsAttempted('BCM3143',3);
	$sem6CreditsEarned += CalculateCreditsEarned('BCM3143',3);
	//Software Design Workshop
	$sem6GPA += CalculateGPA('BCS2343',3);
	$sem6CreditsAttempted += CalculateCreditsAttempted('BCS2343',3);
	$sem6CreditsEarned += CalculateCreditsEarned('BCS2343',3);
	//Mobile Application Development
	$sem6GPA += CalculateGPA('BCS3283',3);
	$sem6CreditsAttempted += CalculateCreditsAttempted('BCS3283',3);
	$sem6CreditsEarned += CalculateCreditsEarned('BCS3283',3);
	//Software Configuration Management
	$sem6GPA += CalculateGPA('BCS3293',3);
	$sem6CreditsAttempted += CalculateCreditsAttempted('BCS3293',3);
	$sem6CreditsEarned += CalculateCreditsEarned('BCS3293',3);
	
	
	//Semester 7
	$sem7GPA = 0;
	$sem7CreditsAttempted = 0;
	$sem7CreditsEarned = 0;
	//Image Processing
	$sem7GPA += CalculateGPA('BCM2063',3);
	$sem7CreditsAttempted += CalculateCreditsAttempted('BCM2063',3);
	$sem7CreditsEarned += CalculateCreditsEarned('BCM2063',3);
	//Zend PhP
	$sem7GPA += CalculateGPA('BCS3113',3);
	$sem7CreditsAttempted += CalculateCreditsAttempted('BCS3113',3);
	$sem7CreditsEarned += CalculateCreditsEarned('BCS3113',3);
	//Software Testing and Maintenance
	$sem7GPA += CalculateGPA('BCS3323',3);
	$sem7CreditsAttempted += CalculateCreditsAttempted('BCS3323',3);
	$sem7CreditsEarned += CalculateCreditsEarned('BCS3323',3);
	//Formal Method
	$sem7GPA += CalculateGPA('BCS2213',3);
	$sem7CreditsAttempted += CalculateCreditsAttempted('BCS2213',3);
	$sem7CreditsEarned += CalculateCreditsEarned('BCS2213',3);
	//Undergraduate Project I
	$sem7GPA += CalculateGPA('BCC3013',3);
	$sem7CreditsAttempted += CalculateCreditsAttempted('BCC3013',3);
	$sem7CreditsEarned += CalculateCreditsEarned('BCC3013',3);
	
	
	//Semester 8
	$sem8GPA = 0;
	$sem8CreditsAttempted = 0;
	$sem8CreditsEarned = 0;
	//Structured Query Language
	$sem8GPA += CalculateGPA('BCI3913',3);
	$sem8CreditsAttempted += CalculateCreditsAttempted('BCI3913',3);
	$sem8CreditsEarned += CalculateCreditsEarned('BCI3913',3);
	//Visual Effects & 3D Animation
	$sem8GPA += CalculateGPA('BCM3153',3);
	$sem8CreditsAttempted += CalculateCreditsAttempted('BCM3153',3);
	$sem8CreditsEarned += CalculateCreditsEarned('BCM3153',3);
	//Software Quality Assurance
	$sem8GPA += CalculateGPA('BCS3263',3);
	$sem8CreditsAttempted += CalculateCreditsAttempted('BCS3263',3);
	$sem8CreditsEarned += CalculateCreditsEarned('BCS3263',3);
	//Undergraduate Project II
	$sem8GPA += CalculateGPA('BCC3026',6);
	$sem8CreditsAttempted += CalculateCreditsAttempted('BCC3026',6);
	$sem8CreditsEarned += CalculateCreditsEarned('BCC3026',6);
	
	
	//Calculate cumulative credits attempt
	$cumulativeCreditsAttempt = $sem1CreditsAttempted + $sem2CreditsAttempted + $sem3CreditsAttempted + $sem4CreditsAttempted
	+ $sem5CreditsAttempted + $sem6CreditsAttempted + $sem7CreditsAttempted + $sem8CreditsAttempted;
	
	
	//Calculate cumulative credits earned
	$cumulativeCreditsEarned = $sem1CreditsEarned + $sem2CreditsEarned + $sem3CreditsEarned + $sem4CreditsEarned 
	+ $sem5CreditsEarned + $sem6CreditsEarned + $sem7CreditsEarned + $sem8CreditsEarned;
	
	
	//Calculate cumulative GPA
	$cumulativeGPA = $sem1GPA + $sem2GPA + $sem3GPA + $sem4GPA
	+ $sem5GPA + $sem6GPA + $sem7GPA + $sem8GPA;
	$cumulativeGPA = CalculateFinalGPA($cumulativeGPA,$cumulativeCreditsAttempt);
	
	//Calculate GPA
	function CalculateFinalGPA($GPA,$creditsAttempted)
	{
		if($GPA==0 && $creditsAttempted>0)
			return "0.00";
		else if($GPA==0 && $creditsAttempted==0)
			return "";
		else
			return $GPA/$creditsAttempted;
	}
	
	$sem1GPA = CalculateFinalGPA($sem1GPA,$sem1CreditsAttempted);
	$sem2GPA = CalculateFinalGPA($sem2GPA,$sem2CreditsAttempted);
	$sem3GPA = CalculateFinalGPA($sem3GPA,$sem3CreditsAttempted);
	$sem4GPA = CalculateFinalGPA($sem4GPA,$sem4CreditsAttempted);
	$sem5GPA = CalculateFinalGPA($sem5GPA,$sem5CreditsAttempted);
	$sem6GPA = CalculateFinalGPA($sem6GPA,$sem6CreditsAttempted);
	$sem7GPA = CalculateFinalGPA($sem7GPA,$sem7CreditsAttempted);
	$sem8GPA = CalculateFinalGPA($sem8GPA,$sem8CreditsAttempted);
	
	
	//Calculate rating
	function CalculateRating($GPA,$creditsAttempted)
	{
		if($GPA==0 && $creditsAttempted==0)
		return "";
		else
		{
			if($GPA>=3.67)
				return "Excellent Standing";
			else if($GPA>=2.0 && $GPA<=3.66)
				return "Good Standing";
			else
				return "Fail Standing";
		}
	}
	
	$cumulativeRating = CalculateRating($cumulativeGPA,$cumulativeCreditsAttempt);
	$sem1Rating = CalculateRating($sem1GPA,$sem1CreditsAttempted);
	$sem2Rating = CalculateRating($sem2GPA,$sem2CreditsAttempted);
	$sem3Rating = CalculateRating($sem3GPA,$sem3CreditsAttempted);
	$sem4Rating = CalculateRating($sem4GPA,$sem4CreditsAttempted);
	$sem5Rating = CalculateRating($sem5GPA,$sem5CreditsAttempted);
	$sem6Rating = CalculateRating($sem6GPA,$sem6CreditsAttempted);
	$sem7Rating = CalculateRating($sem7GPA,$sem7CreditsAttempted);
	$sem8Rating = CalculateRating($sem8GPA,$sem8CreditsAttempted);
	
	
	echo json_encode(array("cumulativeCreditsAttempt"=>$cumulativeCreditsAttempt,"cumulativeCreditsEarned"=>$cumulativeCreditsEarned,"cumulativeGPA"=>$cumulativeGPA,"cumulativeRating"=>$cumulativeRating
	,"sem1CreditsAttempted"=>$sem1CreditsAttempted,"sem2CreditsAttempted"=>$sem2CreditsAttempted,"sem3CreditsAttempted"=>$sem3CreditsAttempted,"sem4CreditsAttempted"=>$sem4CreditsAttempted,"sem5CreditsAttempted"=>$sem5CreditsAttempted,"sem6CreditsAttempted"=>$sem6CreditsAttempted,"sem7CreditsAttempted"=>$sem7CreditsAttempted,"sem8CreditsAttempted"=>$sem8CreditsAttempted
	,"sem1GPA"=>$sem1GPA,"sem2GPA"=>$sem2GPA,"sem3GPA"=>$sem3GPA,"sem4GPA"=>$sem4GPA,"sem5GPA"=>$sem5GPA,"sem6GPA"=>$sem6GPA,"sem7GPA"=>$sem7GPA,"sem8GPA"=>$sem8GPA
	,"sem1CreditsEarned"=>$sem1CreditsEarned,"sem2CreditsEarned"=>$sem2CreditsEarned,"sem3CreditsEarned"=>$sem3CreditsEarned,"sem4CreditsEarned"=>$sem4CreditsEarned,"sem5CreditsEarned"=>$sem5CreditsEarned,"sem6CreditsEarned"=>$sem6CreditsEarned,"sem7CreditsEarned"=>$sem7CreditsEarned,"sem8CreditsEarned"=>$sem8CreditsEarned
	,"sem1Rating"=>$sem1Rating,"sem2Rating"=>$sem2Rating,"sem3Rating"=>$sem3Rating,"sem4Rating"=>$sem4Rating,"sem5Rating"=>$sem5Rating,"sem6Rating"=>$sem6Rating,"sem7Rating"=>$sem7Rating,"sem8Rating"=>$sem8Rating));
?>