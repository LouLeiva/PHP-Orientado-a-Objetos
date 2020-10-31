<?php

class Person
{
    private $name;
    private $familyname;
    private $phone;
    private $mobile;

    public function __construct($name, $familyname, $phone, $mobile)
    {
        $this->name = $name;
        $this->familyname = $familyname;
        $this->phone = $phone;
        $this->mobile = $mobile;  
    }

    public function __toString()
    {
        return $this->name . "," . $this->familyname. "," . $this->phone . "," . $this->mobile ."</br>";
    }

    /*public function getName()
    {
        return $this->name. "</br>";
    }*/

    public function __call($name, $arguments)
    {
        $no_method = true;
        $method_name = substr($name, 0, 3);

        if($method_name == 'get')
        {
            $no_method = false;
            $real_name = substr(strtolower($name), 3);
            return $this->$real_name . "</br>";
        }

        if ($no_method)
        {
            throw Exception("Metodo {$name} no encontrado");
        }
    }

}

$person = new Person('Lourdes', 'Leiva', '1234567', '1234567890');
echo $person;
echo $person->getName();
echo $person->getFamilyName();
echo $person->getPhone();
?>