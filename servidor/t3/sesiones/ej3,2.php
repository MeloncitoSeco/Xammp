<?php
session_start();

if (isset($_SESSION['total'], $_SESSION['contador'])) {
    $total = $_SESSION['total'];
    $contador = $_SESSION['contador'];

    if (isset($_GET['media'])) {
        $media = $_GET['media'];
    } else {
        $media = $total / $contador;
    }
} else {
    $total = 0;
    $contador = 0;
    $media = 0;
}

session_destroy();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
</head>
<body>

<h1>Resultado</h1>
<p>Total acumulado: <?php echo $total; ?></p>
<p>Contador de números introducidos: <?php echo $contador; ?></p>
<p>Media de los números: <?php echo $media; ?></p>

</body>
</html>
