<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nuevoNombre = $_POST['nuevoNombre'];
    $_SESSION['usuario'] = $nuevoNombre;
}

$sessionId = session_id();
$sessionName = session_name();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Modificar Sesión</title>
</head>
<body>

<h1>Modificar Sesión</h1>
<p>ID de Sesión: <?php echo $sessionId; ?></p>
<p>Nombre de Sesión: <?php echo $sessionName; ?></p>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="nuevoNombre">Nuevo Nombre de Usuario:</label>
    <input type="text" name="nuevoNombre" id="nuevoNombre" required>
    <br>
    <input type="submit" value="Modificar Sesión">
</form>
<br>
<a href="del_sesion.php">Continuar</a>

</body>
</html>
