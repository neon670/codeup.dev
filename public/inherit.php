<?php

// class User {
// 	protected $name = 'Noe';
// 	protected $age;

// }

// class Customer extends User {
// 	private $balance;

// 	public function  __construct($name, $age, $balcane){
// 		$this->$balance
// 	}

// 	public function pay($amount){
// 		return $this->name . ' paid $' . $amount;

// 	}

// }
// $customer = new Customer();
// echo $customer->pay(100);

class User {
	public $name;
	public $age;
	public static $minPassLenght = 6;

	public static function validatePass($pass){
		if(strlen($pass) >= self::$minPassLenght){
			return true;
		}else{
			return false;
		}
	}
}
$password = 'hello';
if(User::validatePass($password)){
	echo 'Pass valid';
} else{
	echo 'Pass not valid';
}