<?php
echo "<tr><th> Nombre Cookie</th><th> Valor </th></tr> \n";
if (empty($_COOKIE))
    echo "Vacio";
else{
    foreach ($_COOKIE as $nombre => $valor)
        echo "<tr> $nombre    $valor";
}

?>