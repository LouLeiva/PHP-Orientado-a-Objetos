<?php
class BaseProfile
{
    protected $connection_data = '<h4>Conexion a Base de datos</h4>';
    protected function connect2DB()
    {
        echo $this->connection_data;
    }
    public function __construct()
    {
        $this->connect2DB();
    }
}

class MyProfile extends BaseProfile
{
    public $name;
    public $last_name;

    public function __construct()
    {
        $this->connect2DB();
    }
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

    
?>