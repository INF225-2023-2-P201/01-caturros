<?php
$host = "localhost";
$bd = "caturros";
$usuario = "root";
$contrasena = "";

$conex = new mysqli($host,$usuario,$contrasena,$bd);
if($conex->connect_errno){
    die("Ha ocurrido un error");
}
?>