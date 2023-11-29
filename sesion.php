<?php
session_start();
require 'bdd/bd.php';

if (!empty($_POST['usuario']) && !empty($_POST['clave'])) {
    $registro = $conexion->prepare('SELECT * FROM administradores WHERE usuario = :usuario');
    $registro->bindParam(':usuario', $_POST['usuario']);
    $registro->execute();
    $resultado = $registro->fetch(PDO::FETCH_ASSOC);

    if ($resultado && $_POST['clave']==$resultado['clave']){
        $_SESSION['id'] = $resultado['id'];
        echo '<script>alert("Inicio de sesión exitoso"); window.location="index.php";</script>';
        exit();
    } else {
        $error = "Usuario o contraseña incorrectos";
        header('Location: sesion.php?error=' . urlencode($error));
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Inicio de sesión</title>
</head>

<body>
    <form method="post">
        <h1>INICIAR SESIÓN</h1>
        <hr>
        <?php
        if (isset($_GET['error'])) {
            echo '<p class="error">' . htmlspecialchars($_GET['error']) . '</p>';
        }
        ?>
        <hr>
        <i class="fa-solid fa-user"></i>
        <label>Usuario</label>
        <input type="text" name="usuario" placeholder="Nombre de usuario">

        <i class="fa-solid fa-unlock"></i>
        <label>Clave</label>
        <input type="password" name="clave" placeholder="Clave">
        <hr>
        <button type="submit">Iniciar Sesión</button>
    </form>
</body>

</html>
