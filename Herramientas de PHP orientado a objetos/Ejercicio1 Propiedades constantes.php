<?php

class Config
{
    const ENVIRONMENT ='Development';

}
class BaseProfile
{
    protected $conection_data = 'Conexion BD';
    protected function connect2DB()
    {
        if ('production'== self::ENVIRONMET)
        {
            echo 'Estableciendo conexión a producción';
        }
        if ('development'== self::ENVIRONMET)
        {
            echo 'Estableciendo conexión a desarrollo';
        }
        if ('staging'== self::ENVIRONMET)
        {
            echo 'Estableciendo conexión a staging';
        }
    }
    public function _construct()
    {
        $this->connect2DB();
    }
}

class MyProfile extends BaseProfile
{
    const DOMAIN_NAME = 'bernardoredsocial.com';
    private $email = 'bernardo@correo.com';
    public $name;
    public $last_name;

    public function _construct()
    {
        $this->DOMAIN_NAME;
        //echo self::DOMAIN_NAME;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function message()
    {
        echo "mensaje";
    }

}

$instMyProfile = new MyProfile;
?>
