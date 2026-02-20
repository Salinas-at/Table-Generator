<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A new web page">
    <meta name="robots" content="index, follow">
    <link rel="icon" href="favicon.ico">
    <title>Generador de tablas</title>
    <style>
        /* Minimal CSS Reset */
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: system-ui, sans-serif; background: #fafbfc; color: #222; min-height: 100vh; line-height: 1.6; }
    </style>
</head>
<body>
  <h2>Generador de tablas de multiplicar en php</h2>
      <form method="post">
        <p>Escribe un numero:</p>
        <input type="number" name="numero" required>
        <button type="submit">Generar:</button>
      </form>
      
      <?php 
      if($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];
        
        echo "<h3>Tabla del numero:</h3>";
        echo "<Table border= '1' cellpading= '8'>";
        
        for ($i = 1; $i <= 10; $i++) {
          $resultado = $numero * $i;
          
          echo "<tr>
                <td>$numero</td>
                <td>x</td>
                <td>$i</td>
                <td>=</td>
                <td>$resultado</td
                </tr>";
        }
        echo "</table>";
      }
      ?>
</body>
</html>