<?php

require_once 'model.php';

class User extends Model
{
	protected static $table = 'users';

}

echo User::getTableName() . PHP_EOL;


// class Father
// {
//     protected static $name = 'Darth Vader';
   

//     public static function getName() 
//     {
//         return static::$name;
//     }
// }

// class Son extends Father
// {
//     protected static $name = 'Luke Skywalker';
// }

// echo Father::getName() . PHP_EOL;
// echo Son::getName();

