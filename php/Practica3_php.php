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
        echo "La suma de $num1 mas $num2 es igual a: " . ($num1 + $num2) . "<br>";

        // Resta
        echo "La resta de $num1 menos $num2 es igual a:" . ($num1 - $num2) . "<br>";

        // Multiplicación
        echo "El producto de $num1 por $num2 es igual a: " . ($num1 * $num2) . "<br>";

        // División
        echo "La división de $num1 entre $num2 es igual a: " . ($num1 / $num2) . "<br>";

        // Módulo
        echo "El resto de dividir $num1 entre $num2 es igual a: " . ($num1 % $num2) . "<br>";

        // Incremento (Pre y post)
        echo "Incremento Pre: Antes de esta línea, el valor era 10. Incrementamos y ahora es " . (++$num1) . "<br>";

        echo "Incremento Post: Mostramos el valor actual ($num1), luego incrementamos. Resultado mostrado: " . ($num1++) . ". Valor después del incremento: $num1 <br>";

        // Decremento (Pre y post)
        echo "Decremento Pre : Antes de esta línea, el valor era 3. Decrementamos y ahora es " . (--$num2) . "<br>";


        echo "Decremento Post: Mostramos el valor actual ($num2), luego decrementamos. Resultado mostrado: " . ($num2--) . ". Valor después del decremento: $num2 <br>";
        ?>
    </p>

    <h2>Operadores de Comprobación</h2>
    <p>
        <?php
        $a = 5;
        $b = "5";

        // Igual (==)
        echo "Igual ($a == '$b'): Compara si $a es igual a '$b' sin importar el tipo de dato. Resultado: " . ($a == $b ? 'true' : 'false') . "<br>";

        // Idéntico (===)
        echo "Idéntico ($a === '$b'): Compara si $a es igual a '$b' y si tienen el mismo tipo. Resultado: " . ($a === $b ? 'true' : 'false') . "<br>";

        // Distinto (<>)
        echo "Distinto ($a <> '$b'): Verifica si $a es diferente a '$b'. Resultado: " . ($a <> $b ? 'true' : 'false') . "<br>";

        // Distinto (!=)
        echo "Distinto ($a != '$b'): Igual que el anterior, verifica si $a es distinto de '$b'. Resultado: " . ($a != $b ? 'true' : 'false') . "<br>";

        // No idéntico (!==)
        echo "No idéntico ($a !== '$b'): Verifica si $a no es igual o no es del mismo tipo que '$b'. Resultado: " . ($a !== $b ? 'true' : 'false') . "<br>";

        // Mayor que
        echo "Mayor que ($a > 4): Verifica si $a es mayor que 4. Resultado: " . ($a > 4 ? 'true' : 'false') . "<br>";

        // Menor que
        echo "Menor que ($a < 10): Verifica si $a es menor que 10. Resultado: " . ($a < 10 ? 'true' : 'false') . "<br>";

        // Mayor o igual
        echo "Mayor o igual ($a >= 5): Verifica si $a es mayor o igual a 5. Resultado: " . ($a >= 5 ? 'true' : 'false') . "<br>";

        // Menor o igual
        echo "Menor o igual ($a <= 5): Verifica si $a es menor o igual a 5. Resultado: " . ($a <= 5 ? 'true' : 'false') . "<br>";
        ?>
    </p>

    <h2>Operadores de Asignación</h2>
    <p>
        <?php
        $c = 10;
        // Inicializacion
        echo "Inicialización (\$c = 10): \$c es ahora $c <br>";
        
        // Suma y asignación
        echo "Suma y asignación (\$c + 5): Resultado es " . ($c + 5) . "<br>";
        
        // Resta y asignación
        echo "Resta y asignación (\$c - 2): Resultado es " . ($c - 2) . "<br>";
        
        // Multiplicación y asignación
        echo "Multiplicación y asignación (\$c * 3): Resultado es " . ($c * 3) . "<br>";
        
        // División y asignación
        echo "División y asignación (\$c / 4): Resultado es " . ($c / 4) . "<br>";
        
        // Módulo y asignación
        echo "Módulo y asignación (\$c % 3): Resultado es " . ($c % 3) . "<br>";
        
        ?>
    </p>

    <h2>Operadores Lógicos</h2>
    <p>
        <?php
        $x = true;
        $y = false;
        echo "AND (\$x && \$y): Ambos deben ser true. Resultado: " . ($x && $y ? 'true' : 'false') . "<br>";
        echo "OR (\$x || \$y): Al menos uno debe ser true. Resultado: " . ($x || $y ? 'true' : 'false') . "<br>";
        echo "NOT (!\$x): Invierte el valor de \$x. Resultado: " . (!$x ? 'true' : 'false') . "<br>";
        ?>
    </p>

    <h2>Operadores de Cadena</h2>
    <p>
        <?php
        $texto1 = "Hola";
        $texto2 = " Mundo";
        echo "Concatenación (\$texto1 . \$texto2): Une dos cadenas. Resultado: " . ($texto1 . $texto2) . "<br>";
        $texto1 .= $texto2;
        echo "Asignación con concatenación (\$texto1 .= \$texto2): Añade \$texto2 a \$texto1. Resultado: $texto1 <br>";
        ?>
    </p>
</body>
</html>
