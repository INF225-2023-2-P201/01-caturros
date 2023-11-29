
<?php include 'header.php'; ?>

  <div class="container">
    <div class="input-group">
        <label for="entrada" class="entrada-label">Entrada:</label>
        <input type="text" id="entrada" name="entrada" class="entrada-input" placeholder="Ingresa una intención">
        <button onclick="calcularResultado()" class="calcular-button">Calcular</button>
    </div>
    <br>
    <label for="salida" class="salida-label">Salida:</label>
    <output id="salida" name="salida" class="salida-output"></output>
      
  </div>
      <script>
          function calcularResultado() {
            var valorEntrada = document.getElementById("entrada").value;

            fetch('descripcion.py?text=' + encodeURIComponent(valorEntrada))
                .then(response => response.json())
                .then(data => {
                    console.log('Respuesta del servidor:', data);
                    
                    var resultado = data.Resultado;

                    document.getElementById("salida").textContent = resultado;
                })
                .catch(error => console.error('Error:', error));
          }
      </script>
  <?php
  echo "<br>";
    ?>
</body>
</html>