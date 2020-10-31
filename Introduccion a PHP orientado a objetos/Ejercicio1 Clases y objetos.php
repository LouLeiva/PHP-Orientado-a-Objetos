<?php
class Person
{
    public $age;
    public $name;
    public function run()
    {
        echo '<h4>Estoy corriendo</h4>';
        echo "<br></br>";

    }
    public function _construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}
$person = new Person('Kenneth',10);
echo $person->name;
$person->run();

$person2 = new Person('Leah',3);

echo "\n";
echo $person2->name;
$person->run();

?>