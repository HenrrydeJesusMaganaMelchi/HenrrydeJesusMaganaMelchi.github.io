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
    
    // Conexión a PostgreSQL
    $conexion = pg_connect("host=$servidor dbname=$BD user=$usuario password=$password");
    if (!$conexion) {
        die("Error al conectar a la base de datos: " . pg_last_error());
    }

    $tabla = "prueba1";
    $consulta = "CREATE TABLE $tabla (
        id SERIAL PRIMARY KEY,
        nombre VARCHAR(50) NOT NULL
    );";

    // Ejecutar la consulta
    $resultado = pg_query($conexion, $consulta);
    if ($resultado) {
        echo "La tabla $tabla se creó correctamente en la base de datos <br>";
        echo "El Script utilizado fue: $consulta <br><br>";
    } else {
        echo "La tabla $tabla no se pudo crear correctamente <br>" . pg_last_error($conexion);
    }

    echo "<br><br>";

    // Cerrar conexión
    pg_close($conexion);
    ?>
</body>
</html>
