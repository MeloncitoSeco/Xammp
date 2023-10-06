<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $eje=1;
    //1. Dadas tres variables enteras $a, $b, $c, visualizar la mayor. Resolverlo con dos  if compactos.
    echo("<br><br> ejercicio $eje<br>");
    $a=rand(1,100);
    $b=rand(1,100);
    $c=rand(1,100);

    echo($a>=$b && $b>$c ? "A es la mayor $a":
    ($b>=$a && $b>$c ?"B es la mayor $b":
    "C es la mayor $c" ));
   
    $eje++;
    //2.  Dadas tres variables string  $a, $b, $c a las que se asignan tres cadenas cualesquiera escribe un 
    //código php que visualice la cadena de mayor longitud.
    echo("<br><br> ejercicio $eje<br>");
    $a="Holi ";
    $b="Holiwi ";
    $c="SASISDGF ";

    echo(strlen($a)>strlen($b) && strlen($b)>strlen($c) ? "A es la mayor $a":
    (strlen($b)>strlen($a) && strlen($b)>strlen($c) ?"B es la mayor $b":
    "C es la mayor $c" ));
    
    $eje++;
    //3. Escribir un código que genere un número aleatorio entre 1 y 100 y visualice si es par o impar.
    echo("<br><br> ejercicio $eje<br>");
    
    $num=rand(1,100);
    if(($num%2)==0){
        echo ("$num es par" );
    }else{
        echo("$num es impar");
    }
    
    $eje++;
    //4. La función date(“D”) devuelve un día de la semana en el formato “Mon”, “Tue”,... Escribe un código 
    //php que evalue la expresión devuelta por la función date() y visualice el nombre completo del día en castellano. Utiliza switch.
    echo("<br><br> ejercicio $eje<br>");
    
    $dia=date("D");
    
    switch ($dia){
        case"Mon":
            echo("Hoy es Lunes");
        break;
        case"Tue":
            echo("Hoy es Martes");
        break;
        case"Wed":
            echo("Hoy es Miercoles");
        break;
        case"Thu":
            echo("Hoy es Jueves");
        break;
        case"Fri":
            echo("Hoy es Viernes");
        break;
        case"Sat":
            echo("Hoy es Sabado");
        break;
        case"Sun":
            echo("Hoy es Domingo");
        break;
    }
    
    $eje++;
    //5. Escribe un código que dadas tres variables string $a, $b, $c las concatene de forma que la 
    //primera sea la de menor longitud, la segunda la siguiente de menor longitud  y la tercera la de mayor longitud.
    echo("<br><br> ejercicio $eje<br>");
    
    $a="Holi ";
    $b="Holiwi ";
    $c="SASISDGF ";
    $salida="";

    $salida.=strlen($a)<strlen($b) && strlen($b)<strlen($c) ? "$a":
    (strlen($b)<strlen($a) && strlen($b)<strlen($c) ?"$b":
    "$c" );
    strlen($a)<strlen($b) && strlen($b)<strlen($c) ? $a="$a":
    (strlen($b)<strlen($a) && strlen($b)<strlen($c) ?$b="$b":
    $c="$c" );

    $salida.=strlen($a)<strlen($b) && strlen($b)<strlen($c) && strlen($a)!=0 ? "$a":
    (strlen($b)<strlen($a) && strlen($b)<strlen($c) &&strlen($b) !=0 ?"$b":
    "$c" );


    $salida.=strlen($a)>strlen($b) && strlen($b)>strlen($c) ? "$a":
    (strlen($b)>strlen($a) && strlen($b)>strlen($c) ?"$b":
    "$c" );
    echo("$salida");
    
    $eje++;
    //6. Escribe un código php que visualice los números impares del 1 al 99 en el formato 1-3-… excluyendo 
    //el 5 y  los múltiplos de 5. (continue)
    echo("<br><br> ejercicio $eje<br>");
    
    for($num = 0;$num<100;$num++){
        if($num%2!=0 && $num%5!=0){ 
            echo("$num-");
        }else{
            continue;
        }
    }
    
    $eje++;
    //7. Escribe un código php que calcule y visualice el factorial de un número entero. 
    //Realizar dos versiones: a) con while   b) con do-while
    echo("<br><br> ejercicio $eje<br>");
    
    echo("While<br>");
    $num=4;
    $salida=1;
    while($num>0){
        $salida*=$num;
        $num-=1;
    }
    echo("$salida");
    echo("<br>do While<br>");
    $num=4;
    $salida=1;
    do{
        $salida*=$num;
        $num-=1;
    }while($num>0);
    echo("$salida");
    
    $eje++;
    //8. Escribe un código php que declare e inicialice un array asociativo que contenga 
    //el nombre de cinco personas siendo las claves sus NIF´s. Visualiza las claves y los contenidos 
    //del array mediante print_r(). 
    echo("<br><br> ejercicio $eje<br>");
    $array = array(
        "a111111111" => "Marina",
        "b222222222" => "Miriam",
        "c333333333" => "Sergio",
        "d444444444" => "Tata",
        "f555555555" => "Gonzalem",);

        print_r($array);
    
    $eje++;
    //9. Escribe un código php que genere un array escalar con los primeros diez números primos y visualice 
    //su contenido mediante un bucle for. 
    echo("<br><br> ejercicio $eje<br>");
    unset($array);

    $n1 = 1;
    $n2 = 100;
for ($i = $n1; $i <= $n2; $i++)
{
    $nDiv = 0;
            for ($n = 1; $n <= $i; $n++)
        {
            if($i%$n == 0)
        {
        $nDiv = $nDiv + 1;
        }
    }
        if($nDiv == 2 or $i == 1)
    {
        $array[] = $i;
    }
}
print_r($array);
    $eje++;


   ?>
</body>
</html>


