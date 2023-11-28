
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caturros</title>
    <link rel="stylesheet" href="style.css">

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
          <span class="registros-link"><a href="registros.php">CATURROS</a></span>
          <span class="registros-link"><a href="registros.php">Registros</a></span>
      </div>
  </header>


  <div class="container">
      <label for="entrada" class="entrada-label">Entrada:</label>
      <input type="text" id="entrada" name="entrada" class="entrada-input" placeholder="Introduce un valor">

      <br>

      <label for="salida" class="salida-label">Salida:</label>
      <output id="salida" name="salida" class="salida-output"></output>
      
      <br>

      <button onclick="calcularResultado()" class="calcular-button">Calcular</button>
      
  </div>
      <script>
          function calcularResultado() {
              var valorEntrada = document.getElementById("entrada").value;
              document.getElementById("salida").textContent = valorEntrada;
          }
      </script>
  <?php
  echo "<br>";
    ?>
  <div class="container">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/NXTS4NMlJdc?si=O6EQkJZAxHmGdz1K" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  </div>
</body>
</html>