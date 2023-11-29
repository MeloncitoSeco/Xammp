<?php
function leer_config($nombre, $esquema){
	$config = new DOMDocument();
	$config->load($nombre);
	$res = $config->schemaValidate($esquema);
	if ($res===FALSE){ 
	   throw new InvalidArgumentException("Revise fichero de configuración");
	} 		
	$datos = simplexml_load_file($nombre);	
	$ip = $datos->xpath("//ip");
	$nombre = $datos->xpath("//nombre");
	$usu = $datos->xpath("//usuario");
	$clave = $datos->xpath("//clave");	
	$cad = sprintf("mysql:dbname=%s;host=%s", $nombre[0], $ip[0]);
	$resul = [];
	$resul[] = $cad;
	$resul[] = $usu[0];
	$resul[] = $clave[0];
	return $resul;
}
function comprobar_usuario($nombre, $clave){
	$res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
	$bd = new PDO($res[0], $res[1], $res[2]);
	$ins = "select codRes, correo from restaurantes where correo = '$nombre' 
			and clave = '$clave'";
	$resul = $bd->query($ins);	
	if($resul->rowCount() === 1){		
		return $resul->fetch();		
	}else{
		return FALSE;
	}
}
function registrar_restaurante($correo, $clave, $pais, $CP, $Ciudad, $Direccion) {
    try {
        $res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
        $bd = new PDO($res[0], $res[1], $res[2]);
        $ins = "SELECT correo FROM restaurantes WHERE correo = :correo";
        $stmt = $bd->prepare($ins);
        $stmt->bindParam(':correo', $correo);
        $stmt->execute();
        
        if ($stmt->rowCount() === 0) {
            $insertQuery = "INSERT INTO restaurantes (correo, clave, pais, CP, Ciudad, Direccion) VALUES (:correo, :clave, :pais, :CP, :Ciudad, :Direccion)";
            $insertStmt = $bd->prepare($insertQuery);
            $insertStmt->bindParam(':correo', $correo);
            $insertStmt->bindParam(':clave', $clave);
            $insertStmt->bindParam(':pais', $pais);
            $insertStmt->bindParam(':CP', $CP);
            $insertStmt->bindParam(':Ciudad', $Ciudad);
            $insertStmt->bindParam(':Direccion', $Direccion);
            $insertStmt->execute();

            if ($insertStmt->rowCount() > 0) {
                return "Restaurante registrado exitosamente.";
            } else {
                return "No se pudo registrar el restaurante.";
            }
        } else {
            return "El correo ya está registrado.";
        }
    } catch (PDOException $e) {
        return "Error: " . $e->getMessage();
    }
}



