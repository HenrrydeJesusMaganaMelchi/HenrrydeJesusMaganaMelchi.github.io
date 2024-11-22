<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica #14 - Creación de una tabla en una BD existente</title>
</head>
<body>
    <?php
    require("config.php");

    echo "<h1>Crear una tabla en una BD existente</h1>";

    // Validar conexión
    if (!isset($pdo)) {
        die("Error: La conexión a la base de datos no está disponible.");
    }

    $tabla = "prueba1";

    // Consulta para crear la tabla
    $consulta = "CREATE TABLE IF NOT EXISTS $tabla (
        id SERIAL PRIMARY KEY,
        nombre VARCHAR(50) NOT NULL
    );";

    try {
        // Ejecutar la consulta
        $pdo->exec($consulta);
        echo "La tabla <strong>$tabla</strong> se creó correctamente en la base de datos.<br>";
        echo "El Script utilizado fue:<br><pre>$consulta</pre><br>";
    } catch (PDOException $e) {
        echo "Error al crear la tabla <strong>$tabla</strong>: " . $e->getMessage() . "<br>";
    }

    ?>
</body>
</html>
