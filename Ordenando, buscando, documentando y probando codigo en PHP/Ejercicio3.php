<?php

trait myUtilities
{
    function sayMyNme()
    {
        echo "Mi nombre es" . $this->name. "\n";
    }
}

abstract class Animal
{
    abstract public function makeSound();
      public function run()
    {
        echo "estoy corriendo\n";
        echo "<br></br>";

    }
}
class Dog extends Animal
{
     use myUtilities;
     public $name ="Eliot";
     public function makeSound()
{
    echo "Guau\n";
    echo "<br></br>";

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
//echo class_exists("Being");
$classes = ['Being', 'Animales', 'Arbol', 'Perro', 'Gato', 'Mouse', 'Cactus'];
foreach ( $classes as $class_)
{
    echo $class_.( class_exists($class_) ? ' si' : '  no') . "<br></br>";
}