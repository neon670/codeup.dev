<?php
class Datastore
{
    // Array to store our key/value data
    private $data = [];

    // Magic setter to populate $data array
    public function __set($name, $value)
    {
        // Set the $name key to hold $value in $data
        $this->data[$name] = $value;
    }
   	// Get magic method
    // Magic getter to retrieve values from $data
    public function __get($name)
    {
        // Check for existence of array key $name
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }

        return null;

    }
  
}

$ds = new Datastore();
$ds->name = 'Arthur Dent';
$ds->group = 'Codeup';
$ds->age = 42;

echo $ds->group;