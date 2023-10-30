<!DOCTYPE html>
<html>
<head>
    <title>Selecciona tu color favorito</title>
</head>
<body>

<?php
$colorSeleccionado = "white"; // Valor por defecto

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['color'])) {
    $colorSeleccionado = $_POST['color'];
    setcookie('color_favorito', $colorSeleccionado, time() + 3600 * 24 * 30); // Establece la cookie con el color favorito por 30 días
    header("Location: pagina_color.php");
}
?>

<h1>Selecciona tu color favorito</h1>
<form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
    <label for="color">Elige tu color favorito:</label>
    <select name="color" id="color">
        <option value="white">Blanco</option>
        <option value="red">Rojo</option>
        <option value="green">Verde</option>
        <option value="blue">Azul</option>
    </select>
    <input type="submit" value="Guardar">
</form>

</body>
</html>
