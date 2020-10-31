<?php

class Persona
{
    private $nombre;
    private $last_name;

    public function __construct($nombre, $last_name)
    {
        $this->nombre = $nombre;
        $this->last_name = $last_name;
    }
    public function __toString()
    {
        return $this->nombre . " " . $this->last_name;
    }
}

$Gaby = new Persona('Lourdes', 'Leiva');
echo $Gaby;
?>