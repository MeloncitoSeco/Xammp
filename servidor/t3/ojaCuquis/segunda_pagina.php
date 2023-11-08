<!DOCTYPE html>
<html>
<head>
    <title>Página 2</title>
</head>
<body>

<?php
if (1 != ($_COOKIE['visitas'])) {
    $nombre = $_COOKIE['nombre'];
    echo "<h1>Bienvenido de nuevo, $nombre</h1>";
} else {
    echo "<h1>Bienvenido</h1>";
}
?>

<p>Esta es la segunda página.</p>

</body>
</html>