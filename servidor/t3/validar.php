<?php
function validarNombre($a){
    trim($a);
    if(!ctype_upper($a[0]))
        return(false);
    if (strlen($a)>12)
        return(false);
    return(true);
}

function validarEmail($email){
    
}

function validarApellido($apellido){
}
