<!DOCTYPE html>
<html>
<head>
    <title>Tu color favorito</title>
</head>
<body>

<?php
$color = "white"; // Valor por defecto

if (isset($_COOKIE['color_favorito'])) {
    $color = $_COOKIE['color_favorito'];
    echo "hola";
}

echo "<style>body { background-color: $color; }</style>";
?>

<h1>Tu color favorito es <?php echo $color; ?></h1>
<p>Esta es la segunda página con el fondo de tu color favorito.</p>

</body>
</html>

