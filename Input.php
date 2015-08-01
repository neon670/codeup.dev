<?php

class Input
{
    /**
     * Check if a given value was passed in the request
     *
     * @param string $key index to look for in request
     * @return boolean whether value exists in $_POST or $_GET
     */
    public static function has($key)
    {
        return isset($_REQUEST[$key]);
    }

    /**
     * Get a requested value from either $_POST or $_GET
     *
     * @param string $key index to look for in index
     * @param mixed $default default value to return if key not found
     * @return mixed value passed in request
     */
    public static function get($key, $default = null)
    {
        // TODO: Fill in this function
        return isset($_GET[$key]) ? $_REQUEST[$key] : $default;
        // return self::has($key) ? $_SESSION[$key] : $default;
    }


    

    protected function setFirstName($firstName)
{
    // Check if value is a string
    if (!is_string($firstName)) {
        throw new Exception('$firstName must be a string!');
    }

    $this->firstName = trim($firstName);
}

    public function getString($key)
       {
        
        $result = self::get($key);
        if (is_string($result) && !is_numeric($result) ){
            return trim($result);
        } else if ($result == null) {
            throw new EXCEPTION("The string $key does not exist");
        } else {
            throw new EXCEPTION("$key must be a non-numeric string");
        }
    }


     public static function getNumber($key)
    {
        
        $result = trim(self::get($key));
        if(is_numeric($result)){
            return $result;
        } else if ($result == null) {
            throw new EXCEPTION("The number $key does not exist");
        } else {
            throw new EXCEPTION("Key must be a number");
        }
    }

    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    private function __construct() {}
}


