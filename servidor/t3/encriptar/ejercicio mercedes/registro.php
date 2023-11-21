<?php
$nombre = $_POST['nombre'];
$existencias = $_POST['existencias'];
$host = "127.0.0.1";
$tabla = "tienda";
$usuario = 'root';
$clave = '';

try {
    $mysqli = new mysqli($host, $usuario, $clave, $tabla);
    if ($mysqli->connect_error) {
        die("Error de conexión: " . $mysqli->connect_error);
    }
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}

?>
