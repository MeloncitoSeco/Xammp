<?php

$nombre = $_POST['nombre'];
$existencias = $_POST['existencias'];
$host = "127.0.0.1";
$tabla = "tienda";
$usuario = 'visual';
$clave = 'daw2324';

try {
    $mysqli = new mysqli($host, $usuario, $clave, $tabla);
    if ($mysqli->connect_error) {
        die("Error de conexión: " . $mysqli->connect_error);
    }
    
    echo "Conexión realizada con éxito<br>";

    $mysqli->begin_transaction();

    $consulta = "SELECT id, existencias FROM productos WHERE nombre = ?";
    if ($stmt = $mysqli->prepare($consulta)) {
        $stmt->bind_param("s", $nombre);
        $stmt->execute();
        $stmt->store_result(); 
        $num_filas = $stmt->num_rows;
        $stmt->bind_result($id, $existencias_existente);
        $stmt->fetch();
        $stmt->close();

        if ($num_filas > 0) {
            echo "El producto con nombre $nombre ya existe.";

            $nueva_existencias = $existencias_existente + $existencias;
            $consulta_actualizacion = "UPDATE productos SET existencias = ? WHERE id = ?";
            if ($stmt = $mysqli->prepare($consulta_actualizacion)) {
                $stmt->bind_param("ii", $nueva_existencias, $id);
                if ($stmt->execute()) {
                    echo "existencias actualizada con éxito.";
                    $mysqli->commit();
                } else {
                    echo "Error al actualizar la existencias: " . $stmt->error;
                    $mysqli->rollback();
                }
                $stmt->close();
            } else {
                echo "Error en la consulta preparada: " . $mysqli->error;
                $mysqli->rollback();
            }
        } else {
            $consulta_insercion = "INSERT INTO productos (nombre, existencias) VALUES (?, ?)";
            if ($stmt = $mysqli->prepare($consulta_insercion)) {
                $stmt->bind_param("si", $nombre, $existencias);
                if ($stmt->execute()) {
                    echo "Producto insertado con éxito.";
                    $mysqli->commit();
                } else {
                    echo "Error al insertar el producto: " . $stmt->error;
                    $mysqli->rollback();
                }
                $stmt->close();
            } else {
                echo "Error en la consulta preparada: " . $mysqli->error;
                $mysqli->rollback();
            }
        }
    } else {
        echo "Error en la consulta preparada: " . $mysqli->error;
        $mysqli->rollback();
    }

    $mysqli->close();
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
?>
