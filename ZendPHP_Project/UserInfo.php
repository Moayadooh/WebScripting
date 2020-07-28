<?php
    class UserData{
        public $username;
        public $email;
        public $password;
        public $cpassword;
        function setUsername($username){
            $this->username = $username;
        }
        function setEmail($email){
            $this->email = $email;
        }
        function setPassword($password){
            $this->password = $password;
        }
        function setCpassword($cpassword){
            $this->cpassword = $cpassword;
        }
        function getUsername(){
            return $this->username;
        }
        function getEmail(){
            return $this->email;
        }
        function getPassword(){
            return $this->password;
        }
        function getCpassword(){
            return $this->cpassword;
        }
    }
?>