
<?php include 'header.php'; ?>

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
</body>
</html>