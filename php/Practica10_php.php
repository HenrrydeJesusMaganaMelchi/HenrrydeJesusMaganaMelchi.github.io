<?php
require("config.php");

echo "<h1>Práctica 10: Listar bases de datos</h1><br><br>";

try {
    // Consulta para listar bases de datos en PostgreSQL
    $consulta = "SELECT datname AS database_name FROM pg_database WHERE datistemplate = false;";
    $resultado = $pdo->query($consulta);

    echo "<table border=1>";
    echo "<tr><th align='center'>Listado de las bases de datos</th></tr>";

    // Iterar sobre los resultados
    while ($row = $resultado->fetch()) {
        echo "<tr>";
        echo "<td>{$row['database_name']}</td>";
        echo "</tr>";
    }

    echo "</table><br><br>";
} catch (PDOException $e) {
    echo "Error al listar las bases de datos: " . $e->getMessage();
}
?>
