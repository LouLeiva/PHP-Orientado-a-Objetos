<?php

class Indestructible
{
    public function __construct()
    {
        print "Clase creada";
        print "<br>";
        $this->name = "Indestructible";
    }
    public function __destruct()
    {
        print "Destruyendo a ".$this->name."</br>";
    }
}

$instIndestructible = new Indestructible();
unset($instIndestructible);

for ($i =1; $i <=40; $i++)
{
    echo "{$i}";
    echo "<br>";
        /*if ($i>20)
    {
        exit();
    }*/
}
?>