<?php

	class DbOperations{
		private $con;
		function __construct(){
			require_once dirname(__FILE__).'/DbConnect.php';
			$db = new DbConnect();
			$this->con = $db->connect();
		}
		
		public function createUser($username, $mobileNo, $pass){
			if($this->isUserExist($username, $mobileNo)){
				return 0;
			}
			else{
				$password = md5($pass);
				$stmt = $this->con->prepare("INSERT INTO users (id,username
				,mobileNo,password) VALUES (NULL,?,?,?);");
				$stmt->bind_param("sss",$username,$mobileNo,$password);
				
				if($stmt->execute())
					return 1;
				else
					return 2;
			}
		}
		
		public function userLogin($username,$pass){
			$password = md5($pass);
			$stmt = $this->con->prepare("Select id from users where username = ? and password = ?");
			$stmt->bind_param("ss",$username,$password);
			$stmt->execute();
			$stmt->store_result();
			return $stmt->num_rows > 0;
		}
		
		public function getUserByUsername($username){
			$stmt = $this->con->prepare("select * from users where username = ?");
			$stmt->bind_param("s",$username);
			$stmt->execute();
			return $stmt->get_result()->fetch_assoc();
		}
		
		private function isUserExist($username, $mobileNo){
			$stmt = $this->con->prepare("Select id from users where username = ? or mobileNo = ?");
			$stmt->bind_param("ss", $username, $mobileNo);
			$stmt->execute();
			$stmt->store_result();
			return $stmt->num_rows > 0;
		}
	}

?>