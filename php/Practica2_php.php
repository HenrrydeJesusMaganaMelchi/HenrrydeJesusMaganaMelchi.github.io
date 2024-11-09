<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 2</title>
</head>
<body>
<?php
function mensaje(){
echo "Hola mundo";
}
Mensaje() //Mandamos a llamar a la función
?>
<h2>Variables globales y variables locales</h2>
<?php
$a=10; //variable global


function variables(){
$b=15;
echo "Prueba de la impresión de variables dentro de php";
echo "La variable a es $a <br>";
echo "La variable b es $b <br><br>";
}
variables();
echo "Prueba de la impresión de variables fuera de una funcion <br>";
echo "La variable a es $a <br>";
echo "La variable b es $b <br>";
?>

</body>
</html>