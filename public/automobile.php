<?php

class Automobile
{
	public $color;
	public $make;
	public $model; public 

	function __construct()
    {
        echo 'New car was constructed!' . PHP_EOL;
    }



	public function describeCar()
	{
		echo "Welcome your new $this->color $this->make $this->model" . PHP_EOL;
	}

}

$hoopty = new Automobile();
// $hoopty->color = 'tan';
// $hoopty->make ='ACME';
// $hoopty->model ='Family Truckster';
// $hoopty->describeCar();

// $grade = new Automobile();
// $grade->color = 'green';
// $grade->make ='ACME';
// $grade->model ='Fruckster';
// $grade->describeCar();



?>