<?php

$eje=1;
    /* 1
        Realiza un script en php que muestre la fecha y hora actual de estos formatos de ejemplo:
        Sunday
        Sunday 03rd of May 2023 08:22:51 PM
        Sunday, 03 de May de 2023 08:22:51 PM
        May 3, 2023, 8:22 pm
        05.03.09
        3, 5, 2023
        20230503
        it is the 3rd day.
        Sun May 3 20:22:51 CEST 2023
        20:05:51 m es mes
        20:22:51
        */
    echo("<br><br> ejercicio $eje<br>");
        $fechahora=time();
        $fecha= date("D", $fechahora);
        echo ("$fecha<br>");
        $fecha= date("D-d-M-Y H:i:s", $fechahora);
        echo ("$fecha<br>");
        $fecha= date("d m Y H:i:s", $fechahora);
        echo ("$fecha<br>");
        $fecha= date("d-m-Y H:i:s", $fechahora);
        echo ("$fecha<br>");
        $fecha= date("d-m-Y H:i:s", $fechahora);
        echo ("$fecha<br>");
   
    $eje++;
    /* 2
        En el mismo script anterior utiliza las funciones de 
        fecha y hora para mostrar la fecha actual y la fecha 
        dentro de una semana en el formato 2023-10-16. Muestra 
        lo mismo pero en el formato: "lunes, 16 de octubre de 2023. 
        A las 18:35" (en español)
        */
    echo("<br><br> ejercicio $eje<br>");
    $fechaActual = date('Y-m-d');
    $fechaEn7Dias = date('Y-m-d', strtotime('+7 days', strtotime($fechaActual)));
    echo("$fechaEn7Dias");

   
    $eje++;
    /*
        En el mismo script comprueba si el año 2024 es bisiesto y si lo fue el año 2018.
        */
    echo("<br><br> ejercicio $eje<br>");
        $anio= 2024;
        echo("<br>El año $anio ");
        echo (date('L', strtotime("$anio-01-01")) ? 'bisiesto' : 'no bisiesto');
        $anio= 2018;
        echo("<br>El año $anio ");
        echo (date('L', strtotime("$anio-01-01")) ? 'bisiesto' : 'no bisiesto');
        
    
   
    $eje++;
    /*
        de al mismo script las funciones necesarias para mostrar “Hoy es Martes”
        */
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
        /*
            Lo del inicio de sesion
            */
        echo("<br><br> ejercicio $eje<br>");
        $usuariosSuscritos = array("usuario1", "usuario2", "usuario3");

        // Verifica si el usuario está suscrito 
        $usuarioActual = "usuario1";
        
        if (in_array($usuarioActual, $usuariosSuscritos)) {
            // Fecha de inicio y fin de la oferta
            $fechaInicioOferta = strtotime("06 October 2023");
            $fechaFinOferta = strtotime("06 November 2023");
        
            // Fecha actual
            $fechaActual = time();
        
            // Calcular el tiempo restante en segundos
            $tiempoRestante = $fechaFinOferta - $fechaActual;
        
            if ($tiempoRestante > 0) {
                // Convertir el tiempo restante en días
                $diasRestantes = ceil($tiempoRestante / (60 * 60 * 24));
        
                // Mostrar la información de la oferta
                echo "Oferta válida del " . date('d \d\e F \d\e Y', $fechaInicioOferta) . " al " . date('d \d\e F \d\e Y', $fechaFinOferta) . "<br>";
                echo "Esta oferta es válida durante 1 mes, comenzó el " . date('d/m/Y', $fechaInicioOferta) . ", finaliza dentro de " . $diasRestantes . " días, el " . date('d/m/Y', $fechaFinOferta);
            } else {
                echo "La oferta ha expirado.";
            }
        } else {
            echo "Acceso denegado. Debes estar suscrito para ver esta oferta.";
        }


?>