<?php

trait myUtilities
{
    function sayMyName()
    {
        echo "Mi nombre es " . $this->name . "\n";
    }
}

abstract class Animal
{
    const NATIONALITY = 'Universal';
    public static $year_born = 2017;
    abstract public function makeSound();

    public function run()
    {
        echo "Corriendo\n";
    }
    public static function panic()
    {

    }


}

class Dog extends Animal
{
    use MyUtilities;
    public $name = "Rufus";
    public function makeSound()
    {
        echo "Guau\n";
    }
}
class Cat extends Animal
{
    use MyUtilities;
    public $name = "Mini";
    public function makeSound()
    {
        echo "Miau\n";
    }
}

$reflect_class = new ReflectionClass('Cat');
Reflection::export($reflect_class);
echo "<br></br>";
echo $reflect_class->getName() . "<br></br>";
var_dump($reflect_class->isAbstract());
echo "<br></br>";
var_dump($reflect_class->isInstantiable());
echo "<br></br>";
var_dump($reflect_class->isInternal());
?>