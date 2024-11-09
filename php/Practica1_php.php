<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primer script en php</title>
</head>
<body>
    <?php
    echo "Hola! Este es mi primer script php<br>";
    //Esto es una linea de comenantario
    #esto tambien es una linea de comenantario
    /*Esto es un 
    bloque de mas de una linea
    de comentario
    */
    $vartext = "Hola! Ahora estoy usando variables para guardar texto<br>";
    echo $vartext;
    $varnum1 = 5;
    $varnum2 = 6;
    $res=$varnum1+$varnum2;
    echo "El resultado es ".$res;
    ?>
</body>
</html>