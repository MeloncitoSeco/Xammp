<?php
/* si va bien redirige a principal.php si va mal, mensaje de error */
$host = "127.0.0.1";
$tabla = "empresa";
$usuario = 'visual';
$clave = 'daw2324';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$nombre = $_POST['usuario'];
	$contra1 = $_POST['contra1'];

	try {
		$mysqli = new mysqli($host, $usuario, $clave, $tabla);
		if ($mysqli->connect_error) {
			die("Error de conexión: " . $mysqli->connect_error);
		}
		$consulta_seleccion = "SELECT nombre, clave from  usuarios ";
		if ($stmt = $mysqli->prepare($consulta_seleccion)) {

			$stmt->bind_param(':usuario', $usuario);
			$stmt->bind_param(':clave', $clave);


			if ($stmt->execute()) {



				header("Location: yaDentro.php");
			} else {
				echo "Error al actualizar añadir usuario: " . $stmt->error;
			}
		}
	} catch (Exception $e) {
		echo 'Error: ' . $e->getMessage();
	}
}

//header("Location: yaDentro.php");


?>
<!DOCTYPE html>
<html>

<head>
	<title>Formulario de login</title>
	<meta charset="UTF-8">
</head>

<body>
	<?php if (isset($err)) {
		echo "<p> Revise usuario y contraseña</p>";
	} ?>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
		<label for="usuario">Usuario</label>
		<input value="<?php if (isset($usuario)) echo $usuario; ?>" id="usuario" name="usuario" type="text">

		<label for="contra">Clave</label>
		<input id="contra" name="contra" type="password">

		<input type="submit">
	</form>

	<p><a href="registro.php">Crear usuario</p></a>
</body>

</html>