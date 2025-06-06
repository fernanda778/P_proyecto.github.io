<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Lista en recuadro</title>
  <style>
/*  body {
      margin: 0;
      padding: 30px;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to bottom right, #d0f0fd, #f0fbff);
      color: #00334d;
    }*/
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to bottom, #b3e0ff, #e6f7ff);
      color: #00334d;
      margin: 0;
      padding: 0;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    nav {
      background-color: rgba(0, 51, 102, 0.85);
      padding: 15px 30px;
      width: 100%;
      display: flex;
      flex-wrap: wrap;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      justify-content: center;
    align-items: center;
    }

    nav a {
      color: #ffffff;
      text-decoration: none;
      margin: 6px 8px;
      padding: 10px 15px;
      border-radius: 20px;
      transition: background-color 0.3s ease, transform 0.2s ease;
      font-size: 14px;
    }

    nav a:hover {
      background-color: #66b3ff;
      transform: scale(1.05);
    }
.lio{
  color: #fff;
}
.lei {
            text-align: center;
            margin-bottom: 30px;
            font-size: 28px;
            color: #00334d;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
        }
    form {
      background-color: #ffffff;
      border: 2px solid #99ccff;
      border-radius: 10px;
      padding: 20px;
      width: 90%;
      max-width: 400px;
      margin: 0 auto;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    label {
      font-weight: bold;
      display: block;
      margin-bottom: 10px;
    }

    select, input[type="submit"] {
      width: 100%;
      padding: 10px;
      margin-top: 10px;
      margin-bottom: 20px;
      border: 1px solid #99ccff;
      border-radius: 6px;
      font-size: 1rem;
    }

    input[type="submit"] {
      background-color: #3399ff;
      color: white;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
      background-color: #267ac1;
    }

    .text-box {
      width: 100%;
      max-width: 500px;
      margin: 30px auto;
      padding: 20px;
      border: 2px solid #3399ff;
      background-color: #e6f7ff;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .text-box p {
      font-size: 1.1rem;
      line-height: 1.6;
    }

    @media (max-width: 500px) {
      form, .text-box {
        width: 95%;
      }

      header {
        flex-direction: column;
        align-items: flex-start;
      }

      .header-buttons {
        margin-top: 10px;
        width: 100%;
        display: flex;
        justify-content: flex-start;
      }
    }


  </style>
</head>
<body>

<nav>
  <div class="container1">
    <h2 class=" lio">CAPTACIÓN DE AGUA PLUVIAL</h2>
    <a href="index.php">Inicio</a>
    <a href="area.php">Área</a>
    <a href="clima.php">Clima</a>
    <a href="bene.php">Beneficios</a>
    <a href="huella.php">Huella hídrica</a>
    <a href="presu.php">Presupuestos</a>
    <a href="contacto.php">Contacto</a>
    <a href="actual.html">Tiempo actual</a>
  </div>
</nav>

<?php
if (isset($_POST['reiniciar'])) {
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>

<!-- Formulario -->
<form method="post">
  <label class="lei">Clima de diferentes lugares </label>
  <select name="lugar">
    <option value="">Seleccione una area </option>
    <option value="tizayuca" <?php if (!empty($_POST['lugar']) && $_POST['lugar'] == 'tizayuca') echo 'selected'; ?>>TIZAYUCA</option>
    <option value="tulancingo" <?php if (!empty($_POST['lugar']) && $_POST['lugar'] == 'tulancingo') echo 'selected'; ?>>TULANCINGO</option>
    <option value="Haciendas de Tizayuca" <?php if (!empty($_POST['lugar']) && $_POST['lugar'] == 'Haciendas de Tizayuca') echo 'selected'; ?>>HACIENDAS</option>
    <option value="tepojaco" <?php if (!empty($_POST['lugar']) && $_POST['lugar'] == 'tepojaco') echo 'selected'; ?>>TEPOJACO</option>
    <option value="tolcayuca" <?php if (!empty($_POST['lugar']) && $_POST['lugar'] == 'tolcayuca') echo 'selected'; ?>>TOLCAYUCA</option>
  </select>
  <input type="submit" name="mostrar" value="Mostrar información">
  <input type="submit" name="reiniciar" value="Reiniciar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['mostrar'])) {
    $lugar = $_POST["lugar"];
    if (!empty($lugar)) {
        $informacion = [
"tizayuca" => "En Tizayuca, el clima es templado durante todo el año, con 
una temperatura promedio que varía entre 6 °C y 26 °C. La temporada más 
cálida ocurre entre marzo y junio, con temperaturas máximas de 25-26 °C, 
mientras que la más fría es de octubre a febrero, con mínimas de 6 °C <br> La 
temporada de lluvias es nublada, mientras que la seca es parcialmente 
nublada.",

"tulancingo" => "El clima en Tulancingo es templado y húmedo, con temperaturas que varían 
entre 6 °C y 25 °C a lo largo del año. La temporada de lluvias es nublada, mientras que 
la seca es parcialmente nublada.<br><br>
- TEMPORADA DE LLUVIA: De junio a septiembre, con precipitaciones más intensas en julio y agosto.<br>
- TEMPORADA SECA: De noviembre a abril, con menos lluvias y temperaturas más frescas.<br>
- PRECIPITACION ANUAL: Aproximadamente 1669 mm, con septiembre como el mes más lluvioso.<br>",

"Haciendas de Tizayuca" => "Es similar al de Tizayuca, con temperaturas que varían 
entre 6 °C y 26 °C a lo largo del año. La temporada de lluvias 
es nublada, mientras que la seca es parcialmente nublada.<br> <br>
- MES MAS CALIDO: Mayo, con temperaturas máximas de 26 °C y mínimas de 12 °C.<br>
- TEMPORADA DE LLUVIAS: De junio a septiembre, con precipitaciones más intensas en julio y agosto.<br>
- TEMPORADA SECA: De noviembre a abril, con menos lluvias y temperaturas más frescas.<br>",

"tepojaco" => "Es templado y húmedo, con temperaturas que varían entre 6 °C y 26 °C a lo largo del año.<br>
La temporada de lluvias es nublada, mientras que la seca es parcialmente nublada.<br><br>
- TEMPORADA DE LLUVIAS: De junio a septiembre, con precipitaciones más intensas en julio y agosto.<br>
- TEMPORADA SECA: De noviembre a abril, con menos lluvias y temperaturas más frescas.<br>
- PRESIPITACION ANUAL: Aproximadamente 136 mm en los meses más lluviosos.
",

"tolcayuca" => "El clima en Tolcayuca es templado y semiseco, con temperaturas que varían entre 
  5 °C y 25 °C a lo largo del año. La temporada de lluvias es nublada, mientras que la seca es 
  parcialmente nublada.<br>
- TEMPORADA DE LLUVIAS: De junio a septiembre, con precipitaciones más intensas en julio y agosto.<br>
- TEMPORADA SECA: De noviembre a abril, con menos lluvias y temperaturas más frescas."
        ];

        $imagenes = [
            "tizayuca" => "ima/tizayuca.webp", 

            "tulancingo" => "ima/tulancingo.jpg",
            "Haciendas de Tizayuca" => "ima/haciendas.jpg",
            "tepojaco" => "ima/tepojaco.jpg",
            "tolcayuca" => "ima/tolcayuca.jpg"
        ];

        echo "<div class='text-box'>";
        echo "<p><strong>Información sobre $lugar:</strong></p>";
        echo "<p>" . $informacion[$lugar] . "</p>";

        if (isset($imagenes[$lugar])) {
            echo "<img src='" . $imagenes[$lugar] . "' alt='Imagen de $lugar' style='max-width: 100%; height: auto; margin-top: 10px;'>";
        }
        echo "</div>";
    }
}
?>

</body>
</html>
