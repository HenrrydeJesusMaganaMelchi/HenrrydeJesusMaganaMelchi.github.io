<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 3</title>
</head>
<body>
    <h1>TIPOS DE OPERADORES EN PHP</h1>
    <h2>En esta práctica se estarán demostrando los distintos operadores en PHP</h2>

    <h2>Operadores Aritméticos</h2>
    <p>
        <?php
        // Variables
        $num1 = 10;
        $num2 = 3;

        // Suma
        echo "Suma ($num1 + $num2): " . ($num1 + $num2) . "<br>";

        // Resta
        echo "Resta ($num1 - $num2): " . ($num1 - $num2) . "<br>";

        // Multiplicación
        echo "Multiplicación ($num1 * $num2): " . ($num1 * $num2) . "<br>";

        // División
        echo "División ($num1 / $num2): " . ($num1 / $num2) . "<br>";

        // Módulo
        echo "Módulo ($num1 % $num2): " . ($num1 % $num2) . "<br>";

        // Incremento (Pre y post)
        echo "Incremento Pre (++$num1): " . (++$num1) . "<br>";
        echo "Incremento Post ($num1++): " . ($num1++) . "<br>";
        echo "Valor después de Post Incremento: $num1 <br>";

        // Decremento (Pre y post)
        echo "Decremento Pre (--$num2): " . (--$num2) . "<br>";
        echo "Decremento Post ($num2--): " . ($num2--) . "<br>";
        echo "Valor después de Post Decremento: $num2 <br>";
        ?>
    </p>

    <h2>Operadores de Comprobación</h2>
    <p>
        <?php
        $a = 5;
        $b = "5";

        // Igual (==)
        echo "Igual ($a == '$b'): " . ($a == $b ? 'true' : 'false') . "<br>";

        // Idéntico (===)
        echo "Idéntico ($a === '$b'): " . ($a === $b ? 'true' : 'false') . "<br>";

        // Distinto (<>)
        echo "Distinto ($a <> '$b'): " . ($a <> $b ? 'true' : 'false') . "<br>";

        // Distinto (!=)
        echo "Distinto ($a != '$b'): " . ($a != $b ? 'true' : 'false') . "<br>";

        // No idéntico (!==)
        echo "No idéntico ($a !== '$b'): " . ($a !== $b ? 'true' : 'false') . "<br>";

        // Mayor que
        echo "Mayor que ($a > 4): " . ($a > 4 ? 'true' : 'false') . "<br>";

        // Menor que
        echo "Menor que ($a < 10): " . ($a < 10 ? 'true' : 'false') . "<br>";

        // Mayor o igual
        echo "Mayor o igual ($a >= 5): " . ($a >= 5 ? 'true' : 'false') . "<br>";

        // Menor o igual
        echo "Menor o igual ($a <= 5): " . ($a <= 5 ? 'true' : 'false') . "<br>";
        ?>
    </p>

    <h2>Operadores de Asignación</h2>
    <p>
        <?php
        $c = 10;

        // Asignación
        echo "Asignación (\$c = 10): $c <br>";

        // Suma y asignación
        $c += 5;
        echo "Suma y asignación (\$c += 5): $c <br>";

        // Resta y asignación
        $c -= 2;
        echo "Resta y asignación (\$c -= 2): $c <br>";

        // Multiplicación y asignación
        $c *= 3;
        echo "Multiplicación y asignación (\$c *= 3): $c <br>";

        // División y asignación
        $c /= 4;
        echo "División y asignación (\$c /= 4): $c <br>";

        // Módulo y asignación
        $c %= 3;
        echo "Módulo y asignación (\$c %= 3): $c <br>";
        ?>
    </p>

    <h2>Operadores Lógicos</h2>
    <p>
        <?php
        $x = true;
        $y = false;

        // AND
        echo "AND (\$x && \$y): " . ($x && $y ? 'true' : 'false') . "<br>";

        // OR
        echo "OR (\$x || \$y): " . ($x || $y ? 'true' : 'false') . "<br>";

        // NOT
        echo "NOT (!\$x): " . (!$x ? 'true' : 'false') . "<br>";
        ?>
    </p>

    <h2>Operadores de Cadena</h2>
    <p>
        <?php
        $texto1 = "Hola";
        $texto2 = " Mundo";

        // Concatenación
        $saludo = $texto1 . $texto2;
        echo "Concatenación: $saludo <br>";

        // Asignación con concatenación
        $texto1 .= $texto2;
        echo "Asignación con concatenación (\$texto1 .= \$texto2): $texto1 <br>";
        ?>
    </p>
</body>
</html>
