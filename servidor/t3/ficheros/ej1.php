<?PHP
$fich = fopen("fichero_ejemplo.txt", "a+");
if ($fich===false){
    echo "No";
}else{
    while(!feof($fich)){
        $car= fgets($fich);
        echo "$car<br>";
    }
    
1234;
}



?>