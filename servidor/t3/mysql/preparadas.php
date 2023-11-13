


<?php
// CONEXION DE BASE DE DATOS
$mysqli = new mysqli("127.0.0.1", "visual", "daw2324", "tienda");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";
echo "estas conectada";



if($stmt=$mysqli->prepare("UPDATE productos SET precio = precio*1.5 ")){
    $stmt->execute();
}

/*
//BIND_RESULT -> iniciamos sentencia preparada
if ($stmt = $mysqli->prepare("SELECT nif, nombre FROM cliente")) {
    $stmt->execute();

    //vinculamos variables a columnas
    $stmt->bind_result($nif, $nombre);

    //obtenemos los valores
    while ($stmt->fetch()) {
        printf("%s %s<br>", $nif, $nombre);
    }

    //cerramos la sentencia preparada
    $stmt->close();
}
*/



/*sentencia preparada -> insertar un producto, eliminar los pedidos del producto numero 2 e incrementar
5% precio de todos los productos*/
?>