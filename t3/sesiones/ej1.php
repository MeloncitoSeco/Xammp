<!DOCTYPE html>
<html>
<head>
    <title>Inicio de Sesión</title>
</head>
<body>

<h1>Iniciar Sesión</h1>
<form method="POST" action="cont2.php">
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
