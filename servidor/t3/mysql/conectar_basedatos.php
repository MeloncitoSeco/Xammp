<?php


$mysqli = new mysqli("127.0.0.1", "visual", "daw2324", "tienda");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";



echo"<h1>parte actualizar</h1>";

if($stmt=$mysqli->prepare("SELECT nombre, nif FROM cliente")){
    $stmt->execute();
    $stmt->bind_result($nombre, $nif);
    while($stmt->fetch()){
        printf("%s %s\n",$nombre, $nif);
    }
    $stmt->close();
}
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
/*
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
}*/

/*$queryDelete = "DELETE FROM `cliente` WHERE `cliente`.`NIF` = 'M3885337J'";

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
}*/




?>