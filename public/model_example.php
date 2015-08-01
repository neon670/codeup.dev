<?php
require_once '../model_login.php';
// require_once 'model_test.php';


//$query = 'SELECT * FROM users WHERE email = :email';
//$stmt = self::$dbc->prepare($query);
//$stmt->bindValue(':email',$this->email, PDO::PARAM_STR);
//$stmt->execute();
//$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

//if(empty($this->attributes['firstName'])){
//     $this->insert();
// }else{
//     $this->update();
// }

class Model {

    protected static $dbc;
    protected static $table;

    public $attributes = array();

    /*
     * Constructor
     */
    public function __construct()
    {
        self::dbConnect();
    }

    /*
     * Connect to the DB
     */
    private static function dbConnect()
    {
        if (!self::$dbc)
        {
            // @TODO: Connect to database
            self::$dbc = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
            self::$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo 'you are connected to the db' . PHP_EOL;
        }
    }

    /*
     * Get a value from attributes based on name
     */
    public function __get($name)
    {
        // @TODO: Return the value from attributes with a matching $name, if it exists
        {
        if(array_key_exists($name,$this->attributes)){
            return $this->attributes[$name];
            }
            return null;
        }
    }

    /*
     * Set a new attribute for the object
     */
    public function __set($name, $value)
    {
        // @TODO: Store name/value pair in attributes array
        $this->data[$name] = $value;
    }

    /*
     * Persist the object to the database
     */
    public function save()
    {
        // @TODO: Ensure there are attributes before attempting to save
            if(empty($this->attributes['email'])){
                    $this->insert();
                }else{
                    $this->update();
                }
        protected function update()
                $query = 'SELECT * FROM users WHERE email = :email';
                $stmt = self::$dbc->prepare($query);
                $stmt->bindValue(':email',$this->email, PDO::PARAM_STR);
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // @TODO: Perform the proper action - if the `id` is set, this is an update, if not it is a insert
            

        // Ensure that update is properly handled with the id key

        // After insert, add the id back to the attributes array so the object can properly reflect the id
        protected function insert() 

                $stmt = $stmt = self::$dbc->prepare("INSERT INTO" static::$table "(first_name, last_name, email, dob)
                VALUES (:name, :first_name, :last_name, :email, :dob)");
        // You will need to iterate through all the attributes to build the prepared query
               foreach ($table as $table) {
                $stmt = $dbc->prepare($query);
                $stmt->bindValue(':first_name', $this->first_name, PDO::PARAM_STR);
                $stmt->bindValue(':last_name', $this->last_name, PDO::PARAM_STR);
                $stmt->bindValue(':email',$this->email, PDO::PARAM_STR);
                $stmt->bindValue(':dob', $this->dob, PDO::PARAM_STR);
                $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
                $stmt->execute();
            }
        // Use prepared statements to ensure data security
            
    }
    /*
     * Find a record based on an id
     */

    public static function find($id)
    {
        // Get connection to the database
        self::dbConnect();

        //Create select statement using prepared statements
        $stmt = self::$dbc->prepare("SELECT * FROM" . static::$table . "WHERE :id =$id");
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        //Store the resultset in a variable named $result
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC); 


        //The following code will set the attributes on the calling object based on the result variable's contents

        $instance = null;
        if ($result)
        {
            $instance = new static;
            $instance->attributes = $result;
        }
        return $instance;
    }

    /*
     * Find all records in a table
     */
    public static function all()
    {
        self::dbConnect();


        // @TODO: Learning from the previous method, return all the matching records
        return self::$dbc->("SELECT * FROM " . static::$table)->fetchAll(PDO::FETCH_ASSOC);
    }

}

// $model = new Model();
