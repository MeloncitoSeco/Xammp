<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a =1;
    $b= 2;

    function Suma()
    {
        $GLOBALS['b']=$GLOBALS['a']+$GLOBALS['b'];
    }
    Suma();
    echo $b;

        //el puto sergio no puede evitar hacer mansplaining 24/7

?>


</body>
</html>
