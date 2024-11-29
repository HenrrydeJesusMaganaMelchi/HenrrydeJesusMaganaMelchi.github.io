<?php
require("config.php");

echo "<h1>Insertar registro en la tabla Alumno</h1><br>";

$nombre = $_POST["nombre"];
$carrera = $_POST["carrera"];
$escuela = $_POST["escuela"];

try {
    // Crear la consulta SQL
    $consulta = "INSERT INTO Alumno (nombre, carrera, escuela) VALUES (:nombre, :carrera, :escuela)";
    
    // Preparar la consulta
    $stmt = $pdo->prepare($consulta);
    
    // Vincular los parámetros a las variables
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':carrera', $carrera);
    $stmt->bindParam(':escuela', $escuela);
    
    // Ejecutar la consulta
    $stmt->execute();
    
    echo "El registro se ha insertado correctamente.";
} catch (PDOException $e) {
    echo "Error al insertar el registro: " . $e->getMessage();
}
?>
