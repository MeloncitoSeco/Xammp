<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_unset(); 
    session_destroy(); 
}

$sessionId = session_id();
$sessionName = session_name();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Eliminar Sesión</title>
</head>
<body>

<h1>Eliminar Sesión</h1>
<p>ID de Sesión: <?php echo $sessionId; ?></p>
<p>Nombre de Sesión: <?php echo $sessionName; ?></p>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input type="submit" value="Eliminar Sesión">
</form>

</body>
</html>
