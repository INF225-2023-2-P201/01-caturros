<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Inicio de sesión</title>
</head>
<body>
    <form action="IniciarSesion.php" method="post">
        <h1>INICIAR SESIÓN</h1>
        <hr>
        <?php
            if (isset($_GET['error'])){
                ?>
                <p class = "error">
                    <?php
                    echo $_GET['error']
                    ?>
                </p>
        <?php
            }	
        ?>
        <hr>
        <i class="fa-solid fa-user"></i>
        <label>Usuario</label>
        <input type="text" name="Usuario" placeholder="Nombre de usuario">

        <i class="fa-solid fa-unlock"></i>
        <label>Contraseña</label>
        <input type="password" name="Contraseña" placeholder="Contraseña">
        <hr>
        <button type="submit">Iniciar Sesión</button>

    </form>
</body>
</html>