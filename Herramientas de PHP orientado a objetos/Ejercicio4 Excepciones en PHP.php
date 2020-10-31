<?php

/*try
{
    throw new Exception("No hay archivos de configuracion");
}catch(Exception $e)
{
    echo "Error encontrado ". $e->getMessage(). "\n";
    echo "<br>";
}finally
{
    echo "Cerrando la base de datos";
}*/

class DBException extends Exception{}

class Main
{
    public function  __construct()
    {
        try 
        {
            //throw new DBException("No hay conexion");
            throw new Exception ("No hay espacio en memoria");
        }catch (DBException $e)
        {
            echo "Error especifico: " . $e->getMessage(). "\n";
        }catch(Exception $e)
        {
            echo "Error generico: ". $e->getMessage(). "\n";
        }
    }
}

$main =new Main;
?>