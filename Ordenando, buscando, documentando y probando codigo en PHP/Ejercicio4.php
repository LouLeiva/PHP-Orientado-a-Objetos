<?php

trait myUtilities
{
    function sayMyName()
    {
        echo "Mi nombre es" . $this->name. "\n";
    }
}

abstract class Animal
{
    abstract public function makeSound();
      public function run()
    {
        echo '<h3>corriendo</h3>';
        echo "<br></br>";

    }
}
class Dog extends Animal
{
    use myUtilities;
    public $name ="Dogui";
    public function makeSound()
{
    echo "Guau\n";

  }
}
class Cat extends Animal
{
    use myUtilities;
    public $name = "Minina";
    public function makeSound()
    {
        echo "Miau\n";
    }
}
$inst = new Cat();
var_dump(get_class_methods($inst));
var_dump(get_class_methods(new Dog));
var_dump(get_class_methods("Animal"));
echo "<br></br>";