<?PHP
/**
 * Queremos crear un hash de nuestra contraseña uando el algoritmo DEFAULT actual.
 * Actualmente es BCRYPT, y producirá un resultado de 60 caracteres.
 *
 * Hay que tener en cuenta que DEFAULT puede cambiar con el tiempo, por lo que debería prepararse
 * para permitir que el almacenamento se amplíe a más de 60 caracteres (255 estaría bien)
 */
$tama=strlen(password_hash("rasmuslerdorf", PASSWORD_DEFAULT));
echo password_hash("rasmuslerdorf", PASSWORD_DEFAULT)."<br>";
echo password_hash("rasmuslerdorj", PASSWORD_DEFAULT)."<br>";
echo password_hash("rasmuslerdorf", PASSWORD_DEFAULT)."<br>";
echo $tama."<br>";
/**
 * En este caso, queremos aumentar el coste predeterminado de BCRYPT a 12.
 * Observe que también cambiamos a BCRYPT, que tendrá siempre 60 caracteres.
 */

$opciones = [
    'cost' => 12,
];
echo password_hash("rasmuslerdorf", PASSWORD_BCRYPT, $opciones)."<br>";
$tama=strlen(password_hash("rasmuslerdorf", PASSWORD_BCRYPT, $opciones));
echo $tama."<br>";


/**
 * Este código evaluará el servidor para determinar el coste permitido.
 * Se establecerá el mayor coste posible sin disminuir demasiando la velocidad
 * del servidor. 8-10 es una buena referencia, y más es bueno si los servidores
 * son suficientemente rápidos. El código que sigue tiene como objetivo un tramo de
 * ≤ 50 milisegundos, que es una buena referencia para sistemas con registros interactivos.
 */
$timeTarget = 0.005; // 50 milisegundos 

$coste = 8;
do {
    $coste++;
    $inicio = microtime(true);
    password_hash("test", PASSWORD_BCRYPT, ["cost" => $coste]);
    $fin = microtime(true);
} while (($fin - $inicio) < $timeTarget);

echo "Coste apropiado encontrado: " . $coste . "<br>";
?>

?>