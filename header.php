<?php
include("bdd/bd.php");
session_start();       
if (isset($_SESSION['id'])) {     
    $records = $conexion->prepare('SELECT id, usuario, clave FROM administradores WHERE id = :id');     
    $records->bindParam(':id', $_SESSION['id']);     
    $records->execute();     
    $results = $records->fetch(PDO::FETCH_ASSOC);      
    $user = null;      
    if (count($results) > 0) {      
         $user = $results;    
          }   
} 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caturros</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images\Santiago_Wanderers1.png" type="image/x-icon">

    <style>
        .menu{
          display: flex;
          margin-right: 1300px;
        }
        .logo {
          display: flex;
          align-items: center;
        }
        .logo img {
            width: 40px;
            height: auto;
        }
        .header {
            background-color: #137049;
            padding: 10px; /* Ajusta el relleno del header según tus necesidades */
            display: flex;
            justify-content: space-between; /* Espacia los elementos alrededor del header */
            align-items: center; /* Centra verticalmente los elementos en el header */
            border-bottom: 2px solid #B0FEA5;
        }
        .container{
          text-align: center;
          justify-content: center;
          align-items: center;
        }
        .entrada-label {
          font-weight: bold;
          margin-top: 10px;
        }
        .entrada-input {
          width: 250px;
          margin-left: 10px;
          margin-top: 50px;
        }
        .salida-label {
          font-weight: bold;
          margin-top: 10px;
        }
        .salida-output {
          color: black;
          margin-top: 100px;
        }
        .calcular-button {
          background-color: #006400;
          color: white;
          border: none;
          padding: 20px 150px;
          cursor: pointer;
          margin-top: 10px;
        }
    </style>
</head>
<body>
<header class="header">
    <div class="logo">
        <img src="images\Santiago_Wanderers1.png" alt="Logo">
        <span class="registros-link"><a href="index.php">CATURROS</a></span>
        <?php if (!empty($user)): ?>
            <span class="registros-link"><a href="registros.php">Registros</a></span>
        <?php endif ?>
    </div>
    <div class="header-left">
  <?php if (!empty($user)): ?>
    <span class="sesion-link">
    <span class="sesion-link"><a style="color: #B0FEA5; font-size: 25px; font-weight: bold;"><?php echo strtoupper(utf8_decode($results['usuario']))?>&nbsp;</a></span>
    <span class="sesion-link"><a href="CerrarSesion.php">CERRAR SESIÓN</a></span>
  <?php else: ?>
    <span class="sesion-link"><a href="sesion.php">INICIAR SESIÓN</a></span>
    <?php endif ?>
</div>
</header>