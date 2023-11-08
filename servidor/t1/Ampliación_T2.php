
    <?php
  

    //3. 
    echo("<br><br> ejercicio 3 <br>");
    include 'validarMatricula.php';
    if(!empty($_POST['matricula'])){
    
    if (validar($_POST['matricula']))
        echo("La cadena esta bien introducida<br>"  );
        else
        echo("La cadena esta mal introducida<br>"  );
    }

    

?>

<html>
<body>
Formulario:
<form action="<?php $_PHP_SELF ?>" method="POST">

Name: <input id="matricula" type="matricula" name="matricula" />

<input name="submit" type="submit" />
</form>
</body>
</html>