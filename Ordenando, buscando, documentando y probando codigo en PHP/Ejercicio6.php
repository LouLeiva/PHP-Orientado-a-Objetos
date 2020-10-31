<?php

trait myUtilities
{
    function sayMyName()
    {
        if (!($this->name))
        {
            Logger::log(
                'Error. debe tener nombre. Error en el archivo'
            .__FILE__
            .', en la linea ' . __LINE__
            . ', en la clase ' .  __CLASS__
            . ', en el metodo ' . __METHOD__
            . ', en el trait ' . __TRAIT__
        );
            throw new Exception('No tiene nombre');
        }
        echo "<h3>Mi nombre es:</h3>  " . $this->name . "\n";
    }
}
class Logger
{
    public static function log($text)
    {
        $prefix = date('d-m-Y- h:i:s :::');
        file_put_contents('log.txt', $prefix . $text . "\n", FILE_APPEND);
    }
}

abstract class Animal
{

abstract public function makeSound();

public function run()
{
    echo "<h2>Corriendo</h2>\n";
    Logger::log(
        'Error. debe tener nombre. Error en el archivo'
    .__FILE__
    .', en la linea ' . __LINE__
    . ', en la clase ' .  __CLASS__
    . ', en el metodo ' . __METHOD__
    . ', en el trait ' . __TRAIT__
);
}


}

class Dog extends Animal
{
    use MyUtilities;
    public $name = "<h2>Dogui</h2>";
    public function makeSound()
        {
            echo "<h2>Guau!!</h2>\n";
        }
}
class Cat extends Animal
{
    use MyUtilities;
    public $name = "<h2>Rompecabezas</h2>";
    public function makeSound()
    {
        echo "<h2>Miau!!</h2>\n";
        Logger::log(
            'Error. debe tener nombre. Error en el archivo'
        .__FILE__
        .', en la linea ' . __LINE__
        . ', en la clase ' .  __CLASS__
        . ', en el metodo ' . __METHOD__
        . ', en el trait ' . __TRAIT__
    );
    }
}

$instDog = new Dog;
$instCat = new Cat;

$instDog->sayMyName();
$instCat->sayMyName();
$instCat->run();
$instDog->makeSound();
?>