<?php
echo("<br><br> ejercicio 3 <br>");
include 'imc.php';
if($_POST['peso'] && $_POST['altura'] ){
$peso=$_POST['peso'];
$altura=$_POST['altura'];
    echo("Tu peso es de $peso y tu altura es de $altura, entonces tu imc es de ". Imc($peso,$altura). "<br>");




}
?>
<html>
<body>
Formulario:
<form action="<?php $_PHP_SELF ?>" method="POST">

Peso: <input type="number" id="peso" name="peso" step="any" />
Altura: <input type="number" id="altura" name="altura" step="any" />

<input name="submit" type="submit" />
</form>
</body>
</html>