<?PHP
$server="127.0.0.1";
$user="visual";
$password="daw2324";
$dbname="tienda";
try{
    $db= new PDO("mysql:host=$server;dbname=$dbname", $user, $password);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt=$db->prepare("SELECT * FROM cliente");
    $stmt->execute();
    $resultados=$stmt->fetchAll(PDO:: FETCH_ASSOC);
    print_r($resultados);
} catch (PDOException $e){
    echo "Error: " . $e->getMessage();
}



?>
