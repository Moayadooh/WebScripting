<?php

	require_once '../includes/DbOperations.php';
	$response = array();
	if($_SERVER['REQUEST_METHOD']=='POST'){
		if(isset($_POST['username']) and isset($_POST['password'])){
			
			$db = (new DbOperations)->userLogin($_POST['username'],$_POST['password']);
			//$db = new dbOperations();
			if($db){
				$user = (new DbOperations)->getUserByUsername($_POST['username']);
				$response['error'] = false;
				$response['id'] = $user['id'];
				$response['mobileNo'] = $user['mobileNo'];
				$response['username'] = $user['username'];
			}
			else{
				$response['error'] = true;
				$response['message'] = "Invalid username or password";
			}
		}
		else{
			$response['error'] = true;
			$response['message'] = "Required fields are missing....";
		}
	}
	
	echo json_encode($response);

?>