<?php
include('bdd/bd.php');

$valorEntrada = $_GET['valor'];

$consulta = "SELECT cisco FROM intenciones WHERE intencion = :valor";
$statement = $conexion->prepare($consulta);
$statement->bindParam(':valor', $valorEntrada);
$statement->execute();

// Obtiene el resultado
$resultado = $statement->fetch(PDO::FETCH_ASSOC);

// Devuelve el resultado como JSON
echo json_encode(['resultado' => $resultado]);
?>