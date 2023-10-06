<?php
$eje=1;
//1
echo("<br> ejercicio $eje<br>");
$alumno=array(
    "nombre" => "José",
    "apellidos" => "Martínez Roca",
    "telefono" => "96 361 66 54",
    "direccion" => "C/ Arco del triunfo 13",
    "dni" => "22 111 055",
    "num_matricula" => "6666",
    "facultad" => "Facultad Informática",
    "curso" => "5" 
    );
    
    foreach ($alumno as $indice =>$valor){
        $salidaIndice[]=$indice;
        $salidaValor[]=$valor;
    };
    print_r($salidaValor);
    echo("<br>");
    print_r($salidaIndice);

    $eje++;
    //2a
    echo("<br><br> ejercicio $eje<br>");
    $colores[][]="Fuerte"."FF0000";
    $colores[][]="Fuerte"."00FF00";
    $colores[][]="Fuerte"."0000FF";
    $colores[][]="Suave"."FE9ABC";
    $colores[][]="Suave"."FDF189";
    $colores[][]="Suave"."BC8F8F";

    


    $eje++;
   
    
    //3
    echo("<br><br> ejercicio $eje a<br>");//___________________________
    $miFecha = array(
        array(
        array("13 de enero de 2015", "11 de febrero de 2018"),
        array("13 de enero de 2020", "11 de febrero de 2015"),
        ),
        array(
        array("3 de agosto de 2017", "1 de octubre de 2016"),
        array("3 de agosto de 2013", "1 de octubre de 2019"),
        ),
        array(
        array("10 de junio de 2020", "11 de marzo de 2019"),
        ),
        array(
        array("22 de marzo de 2020", "28 de mayo de 2019"),
        array("22 de marzo de 2019", "28 de mayo de 2018"),
        array("22 de marzo de 2018", "28 de mayo de 2017"),
        array("22 de marzo de 2017", "28 de mayo de 2016"),
        )
       
    );
        foreach($miFecha as $arraySalida1){
            foreach($arraySalida1 as $arraySalida2){
                foreach($arraySalida2 as $salida){
                    echo("$salida <br>");
                    //print_r($salida);
                }
            }
        }


    echo("<br><br> ejercicio $eje b<br>");//___________________________

    $equipo_futbol = array
    (
        array("Rooney","Chicharito","Gigs"),
        array("Suarez"),
        array("Torres","Terry","Etoo")
    );
    foreach($equipo_futbol as $arraySalida){
        foreach($arraySalida as $salida){
            echo("$salida ");
        }
        echo("<br>");
    }


    echo("<br><br> ejercicio $eje c<br>");//___________________________
    $datos = array(
        array(array(0, 0, 0),
              array(0, 0, 1),
              array(0, 0, 2) 
              ),
        array(array(0, 1, 0),
              array(0, 1, 1),
              array(0, 1, 2) 
              ),
        array(array(0, 2, 0),
              array(0, 2, 1),
              array(0, 2, 2) 
              )
        );
        foreach($datos as $arraySalida1){
            foreach($arraySalida1 as $arraySalida2){
                foreach($arraySalida2 as $salida){
                    echo("$salida ");
                    //print_r($salida);
                }
                echo("<br>");
            }

        }


        echo("<br><br> ejercicio $eje d<br>");//___________________________


        $supermercado = array("Electrodomesticos" => array("Televisor",  "Heladera"), "alimentos" => array("Carne", "Leche", "Verduras"));
        foreach ($supermercado as $indice =>$valor){
            echo("<br>$indice = ");
            foreach($valor as $salida){
                echo("$salida  ");
            }
        }

        echo("<br><br> ejercicio $eje e<br>");//___________________________

        $productos=array(
            "procesador" => array (
            "AMD" => "K7 XP 1800",
            "PENTIUM" => "IV 2,5 Ghz"
            ),
            "disco_duro" => array(
            "SEAGATE" => "40GB 10000 rpm",
            "SAMSUNG" => "40GB 7200 rpm",
            "WESTERN_DIGITAL" => "60GB 7200 rmp 8MB caché"
            )
            ); 
            foreach ($productos as $indice =>$valor){
                echo("<br><br>$indice = ");
                foreach($valor as $salida => $salida2){
                    
                    echo("<br>  $salida ->$salida2  ");
                }
            }



        echo("<br><br> ejercicio $eje f<br>");

    $productos["procesador"]["AMD"][0]="K7 XP 1900";
    $productos["procesador"]["AMD"][1]="K7 XP 1800";
    $productos["procesador"]["AMD"][2]="K7 XP 1700";
    $productos["procesador"]["PENTIUM"][0]="IV 2,5 Ghz";
    $productos["procesador"]["PENTIUM"][1]="IV 2,4 Ghz";
    $productos["procesador"]["PENTIUM"][2]="IV 2,3 Ghz";
    $productos["procesador"]["PENTIUM"][3]="IV 2,2 Ghz";
    $productos["disco_duro"]["SEAGATE"][0]=" 40GB 10000 rpm";
    $productos["disco_duro"]["SEAGATE"][1]=" 80GB 7200 rpm";
    $productos["disco_duro"]["SEAGATE"][2]=" 160GB 7200 rpm";
    $productos["disco_duro"]["SAMSUNG"][0]=" 40GB 7200 rpm";
    $productos["disco_duro"]["WESTERN_DIGITAL"][0]=" 60GB 7200 rpm 8MB cache";
    $productos["disco_duro"]["WESTERN_DIGITAL"][1]=" 80GB 10000 rpm 16MB cache";

            
    foreach ($productos as $indice =>$valor){
        //echo("<br>$indice = ");
        foreach($valor as $salida){
            //echo("$salida  ");
        }
    }



    $eje++;

    
    //4
    echo("<br><br> ejercicio $eje<br>");
    $array = array(
        'k0' => 'Juan',
        'k1' => 'Álvaro',
        'k2' => 'Maite',
        'k3' => 'Álvaro',
        'k4' => 'Juan',
        'k5' => 'Martina');

        
    

    $eje++;

    
    //5+0
    echo("<br><br> ejercicio $eje<br>");


    $eje++;

    
    //6
    echo("<br><br> ejercicio $eje<br>");


    $eje++;

    
    //7
    echo("<br><br> ejercicio $eje<br>");


    $eje++;

    
    //8
    echo("<br><br> ejercicio $eje<br>");


    $eje++;
?>