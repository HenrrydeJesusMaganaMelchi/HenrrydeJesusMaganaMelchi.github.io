<?php
// Archivo config.php

// Obtener los datos de la base de datos desde las variables de entorno
$host = getenv('DB_HOST');  // Debes utilizar la clave de la variable de entorno, no el valor
$dbname = getenv('DB_NAME');
$user = getenv('DB_USER');
$password = getenv('DB_PASSWORD');
$port = getenv('DB_PORT');  // Asegúrate de que el puerto esté configurado correctamente

// Verifica si las variables de entorno están siendo obtenidas
echo "Host: " . $host . "<br>";
echo "Database: " . $dbname . "<br>";
echo "User: " . $user . "<br>";
echo "Port: " . $port . "<br>";

try {
    // Crear una nueva conexión PDO con PostgreSQL
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
    $pdo = new PDO($dsn, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,  // Manejo de errores
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC  // Modo de obtención de datos
    ]);
} catch (PDOException $e) {
    // Si ocurre un error, muestra el mensaje de error
    die("Error de conexión: " . $e->getMessage());
}
?>
