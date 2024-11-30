<?php
require("config.php");

echo "<h1>Insertar y mostrar registros en la tabla Alumno</h1><br>";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : null;
    $carrera = isset($_POST["carrera"]) ? $_POST["carrera"] : null;
    $escuela = isset($_POST["escuela"]) ? $_POST["escuela"] : null;

    if ($nombre && $carrera && $escuela) {
        try {
            // Insertar nuevo registro
            $consulta = "INSERT INTO Alumno (nombre, carrera, escuela) VALUES (:nombre, :carrera, :escuela)";
            $stmt = $pdo->prepare($consulta);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':carrera', $carrera);
            $stmt->bindParam(':escuela', $escuela);
            $stmt->execute();

            echo "El registro se ha insertado correctamente.<br><br>";
        } catch (PDOException $e) {
            echo "Error al insertar el registro: " . $e->getMessage() . "<br>";
        }
    } else {
        echo "Por favor, complete todos los campos.<br>";
    }
}

// Mostrar registros existentes
echo "<h2>Registros en la tabla Alumno:</h2>";

try {
    $consulta = "SELECT * FROM Alumno";
    $stmt = $pdo->query($consulta);
    $registros = $stmt->fetchAll();

    if (count($registros) > 0) {
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Nombre</th><th>Carrera</th><th>Escuela</th></tr>";
        foreach ($registros as $registro) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($registro['id']) . "</td>";
            echo "<td>" . htmlspecialchars($registro['nombre']) . "</td>";
            echo "<td>" . htmlspecialchars($registro['carrera']) . "</td>";
            echo "<td>" . htmlspecialchars($registro['escuela']) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No hay registros en la tabla.";
    }
} catch (PDOException $e) {
    echo "Error al obtener los registros: " . $e->getMessage();
}
?>

