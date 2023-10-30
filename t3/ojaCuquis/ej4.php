<!DOCTYPE html>
<html>
<head>
    <title>Recordar Correo Electrónico</title>
</head>
<body>

<?php
$correo = "";
$recordar = false;
if(isset($_COOKIE['correo_usuario'])){
    header("Location: pagina2.php");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    if ($_POST['recordar'] == 'si') {
        $recordar = true;
        // Establece una cookie para recordar el correo electrónico
        setcookie('correo_usuario', $correo, time() + 3600 * 24 * 30); // Caduca en 30 días
        header("Location: pagina2.php");
    } else {
        // Elimina la cookie estableciendo una fecha de expiración pasada
        setcookie('correo_usuario', '', time() - 3600);
        header("Location: pagina2.php");
    }
}

?>

<h1>Ingresa tu correo electrónico</h1>
<form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
    <label for="correo">Correo Electrónico:</label>
    <input type="text" name="correo" id="correo" value="<?php echo $correo; ?>" required>
    <p>¿Deseas recordar tu correo electrónico?</p>
    <label>
        <input type="radio" name="recordar" value="si" <?php echo ($recordar) ? 'checked' : ''; ?>> Sí
    </label>
    <label>
        <input type="radio" name="recordar" value="no" <?php echo (!$recordar) ? 'checked' : ''; ?>> No
    </label>
    <input type="submit" value="Enviar">
</form>

</body>
</html>
