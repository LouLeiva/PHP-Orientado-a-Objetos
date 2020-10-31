<?php

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
    public function makeSound()
    {
        echo "Guau\n";
        echo "<br/>";
    }
}
class Cat extends Animal
{
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
    public function connect()
    {
        echo "Conectando con MySQL\n";
        echo "<br/>";
    }
}
class Oracle implements iDB
{
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
?>