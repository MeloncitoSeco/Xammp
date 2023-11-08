<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = (int)$_POST['numero'];

    if (!isset($_SESSION['total'])) {
        $_SESSION['total'] = 0;
        $_SESSION['contador'] = 0;
    }

    $_SESSION['total'] += $numero;
    $_SESSION['contador']++;

    if ($_SESSION['total'] > 10000) {
        $media = $_SESSION['total'] / $_SESSION['contador'];
        header("Location: ej3,2.php?media=$media");
        exit;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Suma de Números</title>
</head>
<body>

<h1>Introduce números hasta que la suma sea mayor de 10,000</h1>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="numero">Número:</label>
    <input type="number" name="numero" id="numero" required>
    <br>
    <input type="submit" value="Agregar Número">
</form>

</body>
</html>
