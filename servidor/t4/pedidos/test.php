<?php
require "bd.php";
$correo="santiago";
$clave="Santi";
$pais="España";
$CP=28223;
$Ciudad="Madri";
$Direccion="Arriba a bajo al centro y pa entro";
echo (registrar_restaurante($correo, $clave, $pais, $CP, $Ciudad, $Direccion));


?>