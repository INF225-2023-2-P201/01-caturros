<?php include 'header.php'; ?>
<?php include 'bdd/bd.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
    <title>Registros</title>
</head>
<body>

<?php
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
