
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina</title>
    <link rel="stylesheet" href="./css/style.css">

    <style>

    form {
      text-align: center;
    }

    label {
      display: block;
      margin-bottom: 30px;
    }

    input[type="text"] {
      width: 800px; /* Puedes ajustar este valor según tus necesidades */
      padding: 20px;
      font-size: 16px;
    }

    input[type="submit"] {
      padding: 10px;
      font-size: 16px;
    }
    </style>
</head>
<body>
    <header class="header">
        <a href="#" class="logo"></a>
        <div class="menu container">
            <input type="checkbox" id="menu"/>
            <label for="menu">
                <img src="./img/Santiago_Wanderers1.png" class="menu-ico" alt="menu">
            </label>
        </div>
    </header>

    <form>
        <label for="nombre">Intención:</label>
        <input type="text" id="nombre" name="nombre">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>