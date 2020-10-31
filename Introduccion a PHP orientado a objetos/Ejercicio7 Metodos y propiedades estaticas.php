<?php
error_reporting(-1);
class DBStatic
{
    protected static $db_user = 'bpineda';
    protected static $db_password = '12345678';
    protected static $db_database_name = 'PHP_00_DB';

    protected static function connect()
    {
        echo "<h3>Conectando con</h3>: " . self::$db_password . ":" . self ::$db_database_name;
    }
}

class BaseProfile extends DBStatic
{
    protected $connection_data = 'Conexion BD';
    protected function connect2DB()
    {
        //echo $this->connection_data;//

    }
    public function __construct()
    {
        //$this->connect2DB();
        self::connect();
    }
}

class MyProfile extends BaseProfile
{
    private $email = 'lou@correo.com';
    public $name;
    public $last_name;

   // public function __construct()
    
     //   $this->connect2DB();
    //}
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email= $email;
    }


}
    
    $instBase = new MyProfile;

    

   // echo DBStatic::$db_user;
    //echo "\n";
    //echo DBStatic::$db_password;
    //echo "\n";
    //echo DBStatic::$db_database_name;
    //echo "\n";
    //DBStatic::connect();
    //$insMyProfile= new MyProfile;



?>