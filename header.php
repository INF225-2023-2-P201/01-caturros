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
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid #B0FEA5;
        }
        .container{
            text-align: center;
            margin-top: 20px;
            display: flex;
            flex-direction: column; /* Establece la dirección de los elementos como columna */
            align-items: center; /* Centra los elementos horizontalmente */
        }
        .input-group {
            display: flex;
            margin-bottom: 10px;
            align-items: center;
        }
        .entrada-label,
        .salida-label {
          margin-top: 5px;
          font-family: 'Helvetica';
          font-weight: bold;
          font-size: 19px;
        }
        .entrada-input {
            padding: 10px;
            width: 300px;
            border: 2px solid #006400; /* Borde gris */
            border-radius: 5px; /* Esquinas redondeadas */
            font-size: 16px; /* Tamaño del texto */
            box-sizing: border-box; /* Incluye el padding y borde en el ancho total */
        }
        .entrada-input:focus {
            outline: none; /* Elimina el contorno predeterminado al hacer clic en la caja de texto */
            border: 3px solid #4CAF50; /* Cambia el borde al hacer clic en la caja de texto */
        }
        .salida-output {
          color: black;
          margin-top: 100px;
        }
        .calcular-button {
            background-color: #137049;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 10px;
        }
        .calcular-button:hover {
            background-color: #45a049;
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