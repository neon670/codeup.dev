<!-- 
class Person
{
    public $firstName;
    public $lastName;
    public $fruit = array();

    public function roamCountryside()
    {
        $distance = mt_rand(1, 10);

        return $this->firstName . "Walking {$distance} miles west.";
    }
    public function addFruit($fruit)
    {
    	$this->fruit[] = $fruit;
	}
}

$tarzan = new Person();
$tarzan->addFruit('banana');

var_dump($tarzan->fruit)
 -->
<?php
 class Log
 {
 	public $filename = '';
 	public	function logMessage($logLevel, $message)
 		{
 			$handle = fopen($this->filename, 'a');
 			$date = date('Y-m-d');
 			fwrite($handle, $date . $logLevel . $message . PHP_EOL);
 			fclose($handle);

 		}

 	public function logError($message){
		$this->logMessage('[Error]', $message);
		}

	public function logInfo($message){
		$this->logMessage('[Info]', $message);
		}

 	


}


?>