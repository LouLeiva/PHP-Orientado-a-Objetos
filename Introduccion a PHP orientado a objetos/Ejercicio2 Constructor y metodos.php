<?php
class Person
{
    public $age;
    public $name;

    public function run()
    {
        echo '<h1>Estoy corriendo</h1>';
        
    }
    public function walk()
    {
        echo "<br></br>";
        echo '<h1>Estoy caminando </h1>';
        echo "<br></br>";
    }

    public function greet($other_person_name)
    {
        echo $this->name . '<h1>Saluda a </h1>' . $other_person_name;
        
    }
    public function __construct()
    {
        echo "<h1>Estoy siendo creado </h1>". rand(1,99)."\n";
        echo "<br></br>";
    }
}
for($i = 0; $i< 5; $i++)
{
    //Person = new Person();
}
$Person = new Person();
$Person->run();
$Person->walk();
$Person->greet('<h1>Karla</h1>');
