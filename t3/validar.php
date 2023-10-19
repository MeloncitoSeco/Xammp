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
    if (empty($email)){
        $errors[]="El email es obligatorio";
    }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errors[]="Formato email incorrecto";
    }
}
