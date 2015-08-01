<?php


class Model
{

	//An attributes property (array) that is not visible outside of the class
	private $attributes = [];
	//table property will be used to let our model know which database table we will be representing.
	protected static $table;


	//A magic setter to create key/value pairs in the attributes array.

	public function __set($name, $value)
	{

		$this->attributes[$name] = $value;
	}

	//A magic getter to retrieve values from the attributes array based on the key name, provided the key exists.
	public function __get($name)
	{
	if(array_key_exists($name,$this->attributes)){
		return $this->attributes[$name];
		}
		return null;
	}

	public static function getTableName() 
    {
        return static::$table;
    }
}

$pop = new Model();
$pop->name = 'Weasel';
$pop->song = 'great';
$pop->genre = 'rock';

echo $pop->song . PHP_EOL;


