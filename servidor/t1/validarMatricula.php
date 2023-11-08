
<?php
function validar ($matricu){
        $comprobante = true;
    if (strlen($matricu) != 7){
        $comprobante=false;
        echo("Cadena tamaño erroneo<br>");
    }else {
        $nums=substr($comprobante,0,3);
        if (!is_numeric($nums)){
            $comprobante=false;
            echo("Cadena con letras en apartado numeros<br>");
        }else{
            $letras=substr($matricu,-3);
            if(!ctype_upper($letras)){
                $comprobante=false;
                echo("letras no en mayuscula<br>");
            }
        }
        
    }
    return $comprobante;
}
?>