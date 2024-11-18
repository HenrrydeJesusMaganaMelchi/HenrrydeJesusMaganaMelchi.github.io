<?php
// Archivo config.php

// Datos de conexión a la base de datos PostgreSQL
$host = getenv('dpg-cst746tds78s73cgsg8g-a'); 
$dbname = getenv('prog_web_hjmm');
$user = getenv('prog_web_hjmm_user');
$password = getenv('GU8LJHs9xnY5IHFap4wV6OAmscHQm5MD');
$port = getenv('5432');

try {
    // Crear una nueva conexión PDO
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
    $pdo = new PDO($dsn, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch (PDOException $e) {
    // Si ocurre un error, muestra el mensaje de error
    die("Error de conexión: " . $e->getMessage());
}
?>
