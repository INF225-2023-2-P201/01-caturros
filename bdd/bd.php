<?php
$host = "localhost";
$bd = "caturros";
$usuario = "root";
$contrasena = "";

try {
    $conexion = new PDO("mysql:host=$host;dbname=$bd", $usuario, $contrasena);

    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $conexion->exec("SET CHARACTER SET utf8");

    return $conexion; 
} catch (Exception $ex) {
    echo "Error de conexión a la base de datos: " . $ex->getMessage();  
}
?>