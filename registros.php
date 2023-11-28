<?php
header('Content-Type: application/json');

// Recibe datos de traducción desde la solicitud AJAX
$frase = $_POST['frase'];
$intencion = $_POST['intencion'];
$traduccion = $_POST['traduccion'];

// Conéctate a la base de datos
$mysqli = new mysqli("127.0.0.1", "tu_usuario", "tu_contraseña", "caturros");

// Verifica la conexión
if ($mysqli->connect_error) {
    die("Error en la conexión a la base de datos: " . $mysqli->connect_error);
}

// Inserta la traducción en la base de datos
$query = "INSERT INTO registro (frase, intencion, traduccion) VALUES (?, ?, ?)";
$stmt = $mysqli->prepare($query);
$stmt->bind_param("sss", $frase, $intencion, $traduccion);
$stmt->execute();
$stmt->close();

$mysqli->close();

// Respuesta JSON indicando éxito
echo json_encode(array('status' => 'success'));
?>
