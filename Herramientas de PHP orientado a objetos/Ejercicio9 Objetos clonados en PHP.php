<?php

class DB
{
    private static $instance;
    public $name = '';
    
    public static function getInstance()
    {
        if (null === static::$instance){
            static::$instance = new static();
        }
        return static::$instance;
    }
    protected function __construct(){}
    public function getName()
    {
        return $this->name. "</br>";
    }
}
$mysql = DB::getInstance();
$oracle = DB::getInstance();
$sql_server = clone $mysql;
$mysql->name = "MySQL";

echo $mysql->getName();
echo $oracle->getName();
echo $sql_server->getName();

echo "-----------------------</br>";

$oracle->name = "Oracle";
echo $mysql->getName();
echo $oracle->getName();
echo $sql_server->getName();

echo "-----------------------</br>";

$sql_server->name = "SQL";
echo $mysql->getName();
echo $oracle->getName();
echo $sql_server->getName();
?>
