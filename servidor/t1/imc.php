<?php
function Imc($peso,$altura){
$numPeso=floatval($peso);
$numAltura=floatval($altura);
if($numAltura>=0 || $numPeso>=0){
    return($numPeso/($numAltura*$numAltura));
    }else
    echo("Error");
    //return("Error");
}
?>