<?php

	/*class student{
		public $name;
		function setName($name){
			$this->name = $name;
		}
		function getName(){
			return $this->name;
		}
		
	}
	
	$s = new student();
	$s->setName("Moayad");
	echo $s->getName();*/



	/*class employee{
		public $name;
		function __construct($name){
			$this->name = $name;
		}
		function getName(){
			return $this->name;
		}
	}
	
	$emp = new employee("Some one");
	echo $emp->getName();*/
	
	
	class car{
		public $price;
		function __construct($price){
			$this->price = $price;
		}
		function __destruct(){
			echo "The price of car is {$this->price}";
		}
	}
	
	$myCar = new car(4900);
	
	
?>