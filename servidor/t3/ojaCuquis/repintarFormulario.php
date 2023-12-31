<?php
include 'validar.php';
/* si va bien redirige a parametrosFormulario.php si va mal, mensaje de error */
$ciudades = array();
$error = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {  

	if($_POST["nombre"]==""){
        $error.= "Recuerda rellenar el nombre ";
    }elseif(!validarNombre($_POST["nombre"])){
        $error.= "nombre mal introducido ";
    }
    
    if ($_POST["email"]==""){
        $error.="El email es obligatorio";
    }elseif(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
        $error.="Formato email incorrecto";
    }
    
    if (empty($_POST["apellido"])){
        $error.="El apellido es obligatorio";
    }elseif(!preg_match("/^[^A-Z][*-][a-zA-Z*]$/", $_POST["apellido"])){
        $error.="Formato apellido incorrecto";
        
    }

    if(!isset($_POST["color"])){
        $error.= " y selecciona un color ";
    }

    if(!isset($_POST["anio"])){
        $error.= "y debe seleccionar un año ";
        }
    
    

    if(!isset($_POST["ciudades"])){
        $error.= " y debe seleccionar una ciudad";
    }

    if(isset($_POST["ciudades"])){
        $ciudades=$_POST["ciudades"];
    }


    if (isset($error)) {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $email = $_POST["email"];
        $color = $_POST["color"];
        $publicidad = $_POST["publicidad"];
        $anio = $_POST["anio"];
        $ciu = $_POST["ciudades"];
        echo $error;

    }else{
        header("Location: parametrosFormulario.php");
    }
    
}

?>


<!DOCTYPE html>
<html>
	<head>
		<title>Repintar formulario</title>		
		<meta charset = "UTF-8">
    <style>
        form {
            background-color: #f9f9f9;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input[type="text"], select {
            width: 100%;
            padding: 5px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="radio"] {
            margin-right: 5px;
        }
        input[type="submit"] {
            background-color: #0074D9;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        input[type="checkbox"] {
            margin-right: 5px;
        }
        p {
            color: red;
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
	</head>
	<body>			
	
		<form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
			
            <h1>Recibe parámetros y repinta el formulario</h1>
            <h3>CAMPOS DE TEXTO:</h3>
            <label for = "nombre">Nombre:</label> 
			<input value = "<?php if(isset($nombre))echo $nombre;?>"
			id = "nombre" name = "nombre" type = "text">
            <label for = "apellido">Apellido:</label> 
			<input value = "<?php if(isset($apellido))echo $apellido;?>"
			id = "apellido" name = "apellido" type = "text">
            <label for = "email">Email:</label> 
			<input value = "<?php if(isset($email))echo $email;?>"
			id = "email" name = "email" type = "email">				
			
            <br>
            <label for="slider">Numero de telefono</label>
            <input type="range" id="slider" name="slider" min="1" max="999999999" step="1" value="123456789">
            <output for="slider" id="sliderValue">123456789</output>
            <script>
                // Actualiza el valor del slider en tiempo real
                const slider = document.getElementById('slider');
                const sliderValue = document.getElementById('sliderValue');

                slider.addEventListener('input', function() {
                    sliderValue.textContent = slider.value;
                });
</script>
            
            <br>

            <h3>RADIO:</h3>
            <label for="Rojo">Rojo: </label>
			<input type="radio" id="colorRojo" name="color" value="rojo" <?php if(isset($color) && $color === "rojo") echo "checked"; ?>>
    
            <label for="Naranja">Naranja: </label>
			<input type="radio" id="colorNaranja" name="color" value="naranja" <?php if(isset($color) && $color === "naranja") echo "checked"; ?>>

            <label for="Verde">Verde: </label>
			<input type="radio" id="colorRojo" name="color" value="verde" <?php if(isset($color) && $color === "verde") echo "checked"; ?>>

            <br><br>
			<input type = "submit">

            <h3>CHECKBOX:</h3>
            <label for="publicidad">Quiero recibir publicidad</label>
            <input type="checkbox" id="publicidad" name="publicidad" <?php if(isset($publicidad)) echo "checked"; ?>>
                                                                    
            <h3>SELECT:</h3>

            <h4>Simple:</h4>
            <label for="anio">Año de finalización de estudios:</label>
            <select name="anio" id="anio" size="5">
            <option value="2023" <?php if(isset($anio) && $anio === "2023") echo "selected"; ?>>2023</option>
            <option value="2022" <?php if(isset($anio) && $anio === "2022") echo "selected"; ?>>2022</option>
            <option value="2021" <?php if(isset($anio) && $anio === "2021") echo "selected"; ?>>2021</option>
            <option value="2020" <?php if(isset($anio) && $anio === "2020") echo "selected"; ?>>2020</option>
         </select>

            <h4>Multiple:</h4>
            <label for="ciudades">Ciudades:</label>
            <select id="ciudades" name="ciudades[]" size="4" multiple>
            <option value="Gerona" <?php if(isset($ciudades) && in_array("Gerona", $ciudades)) echo "selected"; ?>>Gerona</option>
            <option value="Madrid" <?php if(isset($ciudades) && in_array("Madrid", $ciudades)) echo "selected"; ?>>Madrid</option>
            <option value="Zaragoza" <?php if(isset($ciudades) && in_array("Zaragoza", $ciudades)) echo "selected"; ?>>Zaragoza</option>
        </select>
		</form>
	</body>
</html>