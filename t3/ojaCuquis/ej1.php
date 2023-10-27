<!DOCTYPE html>
<html>
<head>
    <title>Formulario con Cookie</title>
</head>
<body>

<?php
$nombre = "";
if (isset($_COOKIE['nombre'])) {
    $nombre = $_COOKIE['nombre'];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if(($_POST['nombre']) != ($_COOKIE['nombre'])){
        setcookie('visitas',1,time()+3600*24);
    }else{
        $visitas = (int) $_COOKIE['visitas'];
        $visitas++;
        setcookie('visitas',$visitas,time()+3600*24);
    }

    $nombre = $_POST['nombre'];
    setcookie('nombre', $nombre, time() + 3600 * 24 * 30);
    
    
    header("Location: segunda_pagina.php");
}
?>

<h1>Bienvenido</h1>
<p>Por favor, ingresa tu nombre:</p>
<form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
    <input type="text" name="nombre" value="<?php echo $nombre; ?>" placeholder="Escribe tu nombre" required>
    <input type="submit" value="Enviar">
</form>

</body>
</html>