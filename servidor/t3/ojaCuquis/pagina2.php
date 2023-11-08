<!DOCTYPE html>
<html>
<head>
    <title>Página 2</title>
</head>
<body>

<?php
$correo = "";

// Verifica si la cookie 'correo_usuario' está definida
if (isset($_COOKIE['correo_usuario'])) {
    $correo = @$_COOKIE['correo_usuario'];
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(@$_POST['correo']=="si"){
        setcookie('correo_usuario', '', time() - 3600);
    }

}
?>

<h1>Página 2</h1>
<?php if (!empty($correo)) : ?>
    <p>Tu correo electrónico recordado es: <?php echo $correo; ?></p>
<?php else : ?>
    <p>No se ha recordado ningún correo electrónico.</p>
<?php endif ?>

<form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
    <p>Quiere borrarlo?</p>
    <label>
        <input type="radio" name="borrar" value="si" > Sí
    </label>
    <input type="submit" value="Enviar">
</form>

</body>
</html>
