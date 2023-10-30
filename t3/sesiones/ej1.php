<!DOCTYPE html>
<html>
<head>
    <title>Inicio de Sesión</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $clave = $_POST['clave'];
    
    
    if ($nombre === 'usuario' && $clave === 'contrasena') {
        session_start(); 
        $_SESSION['nombre'] = $nombre; 
        $_SESSION['autenticado'] = true; 
        header("Location: bienvenida.php"); 
        exit;
    } else {
        echo "<p>Nombre de usuario o contraseña incorrecta. Por favor, inténtalo de nuevo.</p>";
    }
}
?>

<h1>Iniciar Sesión</h1>
<form method="POST" action="formulario.php">
    <label for="nombre">Nombre de Usuario:</label>
    <input type="text" name="nombre" id="nombre" required>
    <br>
    <label for="clave">Contraseña:</label>
    <input type="password" name="clave" id="clave" required>
    <br>
    <input type="submit" value="Iniciar Sesión">
</form>

</body>
</html>