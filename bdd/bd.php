<?php
$host = "localhost";
$bd = "caturros";
$usuario = "root";
$contrasena = "";

try {
    $conexion = new PDO("mysql:host=$host;dbname=$bd",$usuario,$contrasena ); 
    if($conexion){} 
} catch (Exception $ex) {
    echo $ex->getMessage();  
}
?>