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

class Dog extends Animal
{
    use MyUtilities;
    public $name = "Dogui";
    public function makeSound()
    {
        echo "Guau\n";
        echo "<br/>";
    }
}
class Cat extends Animal
{
    use MyUtilities;
    public $name = "Mishito";
    
    public function makeSound()
    {
        echo "Miau\n";
        echo "<br/>";
    }
}

interface iDB
{
    public function connect();
}

class MySQL implements iDB
{
    use MyUtilities;
    public $name = "Versión MySQL...";
    public function connect()
    {
        echo "Conectando con MySQL\n";
        echo "<br/>";
    }
}
class Oracle implements iDB
{
    use MyUtilities;
    public $name = "Versión Oracle...";
    public function connect()
    {
        echo "Conectando con Oracle\n";
        echo "<br/>";
    }
}

$instDog =new Dog;
$instCat = new Cat;
$instDog->makeSound();
$instDog->Run();
$instCat->makeSound();
$instCat->Run();

$instMySQL = new MySQL;
$instOracle = new Oracle;

$instMySQL->connect();
$instOracle->connect();

$instDog->sayMyName();
$instCat->sayMyName();
$instMySQL->sayMyName();
$instOracle->sayMyName();
?>