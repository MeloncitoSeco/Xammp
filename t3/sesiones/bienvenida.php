<?php
session_start();

if (isset($_SESSION['autenticado']) && $_SESSION['autenticado'] === true) {
    $nombre = $_SESSION['nombre'];
    echo "<h1>Bienvenido, $nombre</h1>";
} else {
    echo "<p>No estás autenticado. Por favor, inicia sesión <a href='formulario.php'>aquí</a>.</p>";
}
?>
