<?php
/**
 * Ejemplo sencillo para extender la clase SQLite3 y cambiar los parámetros
 * de __construct, después usar el método open para inicializar la BD.
 */
class MiBD extends SQLite3
{
    function __construct()
    {
        $this->open('ejemplo.db');
    }
}

$bd = new MiBD();


$resultado = $bd->query('SELECT * FROM ');
var_dump($resultado->fetchArray());
?>