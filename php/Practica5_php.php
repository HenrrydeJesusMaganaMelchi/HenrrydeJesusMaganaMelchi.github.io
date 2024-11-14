<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 5</title>
</head>
<body>
    <?php
    $dia = "Miercoles";

    switch ($dia){
    case "Lunes":
            echo "Hoy es lunes";
        break;
    case "Martes":
            echo "Hoy es martes";
        break;
    case "Miercoles":
            echo "Hoy es miercoles";
        break;
    case "Jueves":
            echo "Hoy es jueves";
        break;
    case "Viernes":
            echo "Hoy es viernes";
        break;
    case "Sabado":
            echo "Hoy es sabado";
        break;  
    case "Domingo":
            echo "Hoy es domingo";
        break;
    default:
    }
    ?>
</body>
</html>