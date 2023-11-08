<?php
/*
https://www.php.net/manual/es/set.mysqlinfo.php
https://www.php.net/manual/es/mysqli.quickstart.php

phpmyadmin --> base de datos, usuario, contraseña --> ejemplo, grant all privileges

documento de base --> https://aulavirtual33.educa.madrid.org/ies.sanjuandelacruz.pozuelodealarcon/pluginfile.php/98096/mod_resource/content/1/PHP-MySQL.pdf

tres tablas creadas para el lunes!!! leer hasta pagina 18 --> falta relacionarlas
*/

$mysqli = new mysqli("127.0.0.1", "visual", "daw2324", "tienda");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";
$query = "select * from cliente";
$resultado = $mysqli->query($query);
$numregistros = $resultado->num_rows;
echo "<p> joder $numregistros</p>";

echo "<br><br>";
echo "<table border=2>";


while ($registro = $resultado->fetch_assoc()) {
    echo "<tr>";
    foreach ($registro as $campo)
        echo "<td>", $campo, "</td>";
    echo "</tr>";
}
echo "</table>";


echo"<h1>parte actualizar</h1>";
/*
$query= "INSERT INTO cliente (NIF, nombre, direccion, email, telefono)
VALUES ('M3885337J', 'Empresa Uno', 'Calle Uno, Madrid',
'jefe@empresauno.com', '91 2347898')";

$query = "select * from cliente";
$resultado = $mysqli->query($query);
$numregistros = $resultado->num_rows;
echo "<p> joder $numregistros</p>";

echo "<br><br>";
echo "<table border=2>";


while ($registro = $resultado->fetch_assoc()) {
    echo "<tr>";
    foreach ($registro as $campo)
        echo "<td>", $campo, "</td>";
    echo "</tr>";
}
echo "</table>";*/

$queryInsert = "INSERT INTO cliente (NIF, nombre, direccion, email, telefono) VALUES ('M3885337J', 'Empresa Uno', 'Calle Uno, Madrid', 'jefe@empresauno.com', '91 2347898')";

$querySelect = "SELECT * FROM cliente";

$resultado = $mysqli->query($queryInsert); // Realiza la inserción de datos
if ($resultado) {
    echo "<p>Los datos se han insertado correctamente.</p>";
} else {
    echo "<p>Error al insertar datos: " . $mysqli->error . "</p>";
}

$resultado = $mysqli->query($querySelect); // Realiza la consulta de selección

if ($resultado) {
    $numregistros = $resultado->num_rows;
    echo "<p>Total de registros: $numregistros</p>";

    echo "<table border='2'>";
    while ($registro = $resultado->fetch_assoc()) {
        echo "<tr>";
        foreach ($registro as $campo) {
            echo "<td>", $campo, "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p>Error al realizar la consulta: " . $mysqli->error . "</p>";
}

$queryDelete = "DELETE FROM `cliente` WHERE `cliente`.`NIF` = 'M3885337J'";

$querySelect = "SELECT * FROM cliente";

$resultado = $mysqli->query($queryDelete); // Realiza la inserción de datos
if ($resultado) {
    echo "<p>Los datos se han insertado correctamente.</p>";
} else {
    echo "<p>Error al insertar datos: " . $mysqli->error . "</p>";
}

$resultado = $mysqli->query($querySelect); // Realiza la consulta de selección

if ($resultado) {
    $numregistros = $resultado->num_rows;
    echo "<p>Total de registros: $numregistros</p>";

    echo "<table border='2'>";
    while ($registro = $resultado->fetch_assoc()) {
        echo "<tr>";
        foreach ($registro as $campo) {
            echo "<td>", $campo, "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p>Error al realizar la consulta: " . $mysqli->error . "</p>";
}




?>