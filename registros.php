<?php include 'header.php'; ?>
<?php include 'bdd/bd.php';

// Realizar la consulta para obtener los registros
$query = "SELECT id, frase, intencion, traduccion FROM registro LIMIT 5";
$result = $conexion->query($query);

// Verificar si hay resultados
if ($result->rowCount() > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Frase</th>
                <th>Intención</th>
                <th>Traducción</th>
            </tr>";

    // Mostrar los datos de cada registro
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['frase']}</td>
                <td>{$row['intencion']}</td>
                <td>{$row['traduccion']}</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No hay registros en la base de datos.";
}
