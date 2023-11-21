<?php




if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$nombre = $_POST['usuario'];
	$contra1 = $_POST['contra1'];
	$contra2 = $_POST['contra2'];
	$host = "127.0.0.1";
	$tabla = "empresa";
	$usuario = 'visual';
	$clave = 'daw2324';
	if ($contra1 != $contra2) {
		$err = true;
	} else {
$nombre = $_POST['nombre'];
$existencias = $_POST['existencias'];
$host = "127.0.0.1";
$tabla = "tienda";
$usuario = 'root';
$clave = '';

		try {
			$mysqli = new mysqli($host, $usuario, $clave, $tabla);
			if ($mysqli->connect_error) {
				die("Error de conexión: " . $mysqli->connect_error);
			}
			$contra1=password_hash($contra2,PASSWORD_DEFAULT);
			$consulta_insercion = "INSERT INTO usuarios (nombre, clave) VALUES (?, ?)";
			if ($stmt = $mysqli->prepare($consulta_insercion)) {
				$stmt->bind_param("si", $nombre, $contra1);
				if ($stmt->execute()) {
					header("Location: pagPrincipal.php");
				} else {
					echo "Error al actualizar añadir usuario: " . $stmt->error;
				}
			}
		} catch (Exception $e) {
			echo 'Error: ' . $e->getMessage();
		}
	}
}

?>
<!DOCTYPE html>
<html>

<head>
	<title>Formulario de registro</title>
	<meta charset="UTF-8">
</head>

<body>
	<?php if (isset($err)) {
		echo "<p> Revise usuario y contraseña</p>";
	} ?>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
		<br>
		<label for="usuario">Usuario </label>
		<input value="<?php if (isset($usuario)) echo $usuario; ?>" id="usuario" name="usuario" type="text">
		<br>
		<label for="contra1">Clave </label>
		<input id="contra1" name="contra1" type="password">
		<label for="contra2">Confirme clave </label>
		<input id="contra2" name="contra2" type="password">

		<input type="submit">
	</form>


</body>

</html>