<?php
// Datos de conexión a la base de datos PostgreSQL
$host = getenv('DB_HOST'); 
$dbname = getenv('DB_NAME');
$user = getenv('DB_USER');
$password = getenv('DB_PASSWORD');
$port = getenv('DB_PORT');

try {
    // Crear una nueva conexión PDO
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
    $pdo = new PDO($dsn, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
    echo "Conexión exitosa a la base de datos.";
} catch (PDOException $e) {
    // Si ocurre un error, muestra el mensaje de error
    die("Error de conexión: " . $e->getMessage());
}
?>
