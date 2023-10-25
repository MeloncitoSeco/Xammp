<?php
$nombre = "Santi";
$valor = "404";
$fecha_expiracion = time() + 200;
$path = dirname($_SERVER['REQUEST_URI']);
setcookie($nombre,$valor,$fecha_expiracion,$path,'',0);
echo "Cookie enviada: $nombre, $valor, $fecha_expiracion, $path \n";

?>