<?php
class Pet
{
    public $name = '<h4>Firulais!</h4>';
}

class Person
{
    public $age;
    public $name;
    private $money_in_wallet;
    private $todos;
    private $married;

    public function run()
    {
        echo 'Estoy corriendo';
    }
    public function walk()
    {
        echo 'Estoy caminando';
    }
    public function greet($other_person)
    {
        echo"Hola! " . $other_person->name;
        echo "<br></br>";
    }
    public function _construct($name)
    {
        $this->name = $name;
    }
    public function adopt(Pet $instance_pet)
    {
        echo "Hey! Ahora si adopte a".$instance_pet->name;
        echo "<br></br>";
    }

}
$person1 = new Person('Karla');
$person2 = new Person('Lourdes');
$pet = new Pet();
$person1->greet($person2);
$person1->adopt($pet);

?>