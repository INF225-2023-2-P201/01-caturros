
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
        <a href="#" class="logo"></a>
        <div class="menu container">
            <input type="checkbox" id="menu"/>
            <label for="menu">
                <img src="images/Santiago_Wanderers1.png" class="menu-ico" alt="menu">
            </label>
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
</body>
</html>