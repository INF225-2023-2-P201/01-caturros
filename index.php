
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

            fetch('descripcion.py?text=' + encodeURIComponent(valorEntrada))
                .then(response => response.text())
                .then(data => {
                  console.log('Respuesta del servidor:', data);

                  
                  return JSON.parse(data);
                })
                .then(parsedData => {
                  document.getElementById("salida").textContent = parsedData.partes.join(' ');
                })
                .catch(error => console.error('Error:', error));
          }
      </script>
  <?php
  echo "<br>";
    ?>
</body>
</html>