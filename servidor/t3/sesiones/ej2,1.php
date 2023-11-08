<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    
    $_SESSION['usuario'] = $usuario;
    $_SESSION['email'] = $email;
    
    header("Location: ej2,2.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Registro</title>
</head>
<body>

<h1>Registro de Usuario</h1>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="usuario">Usuario:</label>
    <input type="text" name="usuario" id="usuario" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>
    <br>
    <input type="submit" value="Registrar">
</form>

</body>
</html>
