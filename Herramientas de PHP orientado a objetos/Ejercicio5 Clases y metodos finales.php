<?php

trait myUtilities
{
    function sayMyName()
    {
        echo "Mi nombre es ". $this ->name . "\n";
        echo "<br/>";
    }
}
abstract class Animal
{

    abstract public function makeSound();

    public function run()
    {
        echo "corriendo\n";
        echo "<br/>";
    }
}

class Cat extends Animal
{
    use MyUtilities;
    public $name = "Mishito";
    protected $bread;
    
    public function makeSound()
    {
        echo "Miau\n";
        echo "<br/>";
    }
}

final class Angora extends Cat
{
    public function _construct()
    {
        $this->breed = "Angora";
    }
}
$instCat = new Angora;
$instCat->sayMyName();

?>