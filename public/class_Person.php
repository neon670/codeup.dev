<!-- 

class Person
{
    public $firstName;
    public $lastName;

    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName  = $lastName;
        echo " $this->firstName $this->lastName" . PHP_EOL;
    }

     public function __destruct()
    {
        echo "{$this->firstName} {$this->lastName}'s time of death: " . time() . PHP_EOL;
    }
}

$noe = new Person("now", "won"); -->
<?php
// class Person
// {
//     public $firstName;
//     public $lastName;

//     public static $population = 7241000000;
// }
// 	//error
// 	// $person1 = new Person();
// 	// echo $person1->population;
// 	// ^error^
// echo "The world's population is: " . Person::$population . PHP_EOL;





// class Person
// {
//     public $firstName;
//     public $lastName;

//     public static $population = 7200000000;

//     public static function getScientificName()
//     {
//         return 'Homo sapien';
//     }
// }
// echo Person::getScientificName() . PHP_EOL;

class Person
{
    public $firstName;
    public $lastName;

    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName  = $lastName;
    }

    public function fullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}
class Superhero extends Person
{
    public $pseudonym;
    public $capeColor;

    public function alterEgo()
    {
        return 'Top Secret Alternate Ego: ' . $this->fullName();
    }

    public function hasCape()
    {
        return !empty($this->capeColor);
    }
}
$superman = new Superhero('Clark', 'Kent');
$superman->pseudonym = 'Superman';
$superman->capeColor = 'red';

echo $superman->alterEgo();
var_dump($superman->hasCape());



?>