<?php
class MyProfile
{
    private $email= "l@correo.com";
    public $name;
    public$last_name;

    public function __construct()
    {

    }
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail()
    {
        $this->email = $email;
    }
    private function getDetails()
    {
        
    }
}

$instMyProfile = new MyProfile;

$instMyProfile->email = "Lourdes Leiva";

echo $instMyProfile->getEmail;
?>