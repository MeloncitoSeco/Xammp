<?php
$cadena_conexion = 'mysql:dbname=empresa;host=127.0.0.1';
$usuario = 'root';
$clave = '';
try {
    $bd = new PDO($cadena_conexion, $usuario, $clave);
        echo "Conexión realizada con éxito<br>";                
        $sql = 'SELECT nombre, clave, rol FROM usuarios';
        $usuarios = $bd->query($sql);
        echo "Número de usuarios: " . $usuarios->rowCount() . "<br>";
        foreach ($usuarios as $usu) {
                print "Nombre : " . $usu['nombre'];
                print " Clave : " . $usu['clave'] . "<br>";
        }
        /* consulta preparada, parametros por orden */  
        $preparada = $bd->prepare("select nombre from usuarios where rol = ?"); 
        $preparada->execute( array(0));
        echo "Usuarios con rol 0: " .  $preparada->rowCount() . "<br>";
        foreach ($preparada as $usu) {
                print "Nombre : " . $usu['nombre'] . "<br>";
        }
        /* consulta preparada, parametros por nombre */ 
        $preparada_nombre = $bd->prepare("select nombre from usuarios where rol = :rol");
        $preparada_nombre->execute( array(':rol' => 0));
        echo "Usuarios con rol 0: " .  $preparada->rowCount() . "<br>";
        foreach ($preparada_nombre  as $usu) {
                print "Nombre : " . $usu['nombre'] . "<br>";
        }       
        } catch (PDOException $e) {
                echo 'Error con la base de datos: ' . $e->getMessage();
        }
        
$stmt->bindParam(':nombre',$nombre);
$stmt->bindParam(':ciudad',$ciudad);
$stmt->bindParam(':rol',$rol);

    if(!($sentencia = $mysqli -> prepare('INSERT INTO usuarios(nombre,clave,rol) values(:nombre,:ciudad,:rol)'))){
        echo("Fallo la vpreparacion (". $mysqli -> errno . ")" . $mysqli -> error );
    }

    $nombre = "santi";
    $clave = "334";
    $rol = 0;

    if(!$sentencia -> bind_param("ssi", $nombre,$clave,$rol)){
        echo("Fallo en la vinculacion de parametros: (" . $sentencia->errno . ")" . $sentencia-> error);
    }
    if(!$sentencia -> execute()){
        echo("Fallo en la ejecucion: (" . $sentencia->errno . ")" . $sentencia-> error);
    }

?>