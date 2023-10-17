<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Recibe parametros y repinta el formulario</h1>
    <br>
    <br>
    <h2> campos de texto </h2>
    <form>
        <label for="fname">Nombre:</label>
        <input type="text" id="nombre" name="nombre"><br>
        <label for="lname">Contraseña:</label>
        <input type="password" id="contra" name="contra">
        <br>
    </form>
    <br><br>
    <p><b>Radio</b></p>

    <form>
        <label for="rojo">Rojo</label>
        <input type="radio" id="rojo" name="radio" value="Rojo">
        <label for="naranja">Naranja</label>
        <input type="radio" id="naranja" name="radio" value="Naranja">
        <label for="verde">Verde</label>
        <input type="radio" id="verde" name="radio" value="Verde">
    </form>
    <br><br>
    <p><b>checkbox</b></p>
    <form>
        <label for="vehicle1"> Quiero recibir publicidad</label>
        <input type="checkbox" id="publi" name="publi" value="publi">
        
    </form>
    <?php

    ?>
</body>
</html>