<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Práctica 6 - Verificar Conexión a Base de Datos PostgreSQL</title>
</head>
<body>
    <h1>Práctica 6: Verificación de Conexión a PostgreSQL</h1>
    <p>Estado de la conexión:</p>
    <div>
        <?php
        // Incluir el archivo de configuración para establecer la conexión
        require_once 'config.php';

        // Verificar si la conexión es exitosa
        if (isset($pdo)) {
            echo "<p style='color: green;'>Conexión exitosa a la base de datos PostgreSQL.</p>";
        } else {
            echo "<p style='color: red;'>No se pudo conectar a la base de datos.</p>";
        }
        ?>
    </div>
</body>
</html>
