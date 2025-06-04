<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Infografía</title>
  <style>
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
.lio{
  color: #fff;
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

.lei {
            text-align: center;
            margin-bottom: 30px;
            font-size: 28px;
            color: #00334d;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
        }

    .container {
      max-width: 1200px;
      margin: 30px auto;
      padding: 0 20px;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 20px;
    }

    .card {
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      padding: 20px;
    }

    .card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
      border-radius: 8px;
    }

    .card h3 {
      margin: 15px 0 10px;
      color: #003366;
    }

    .card p {
      color: #444;
    }

    .video-container {
      width: 100%;
      max-width: 100%;
      margin: 0 auto;
      padding: 20px;
      background-color: #e6f7ff;
      display: flex;
      justify-content: center;
    }

    .video-container video {
      width: 90%;
      max-width: 1000px;
      height: auto;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }
  </style>
</head>
<body>

<nav>
  <div class="container1">
    <h2 class="lio">CAPTACIÓN DE AGUA PLUVIAL</h2>
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
<h2 class="lei">Huella hidrica</h2>

<div class="container">
  <div class="card">
    <img src="ima/im2.jpg" alt="Imagen 1">
    <h3>MANTOS ACUÍFEROS</h3>
    <p>En Tizayuca, los mantos acuíferos son una fuente crucial de agua potable, pero enfrentan desafíos significativos debido a la contaminación industrial...</p>
  </div>

  <div class="card">
    <img src="ima/im1.jpg" alt="Imagen 2">
    <h3>ZONAS HÍDRICAS</h3>
    <p>Las zonas hídricas en Tizayuca incluyen los sectores con más riesgo por las precipitaciones...</p>
  </div>

  <div class="card">
    <img src="ima/im3.jpg" alt="Imagen 3">
    <h3>CONTAMINANTES</h3>
    <p>Las presas y ríos han sufrido un deterioro significativo debido a las descargas residuales provenientes de desarrollos habitacionales e industrias cercanas...</p>
  </div>
</div>
<?php
$video = "ima/mundo_mejor.mp4";
if (file_exists($video)) {
    echo '
    <div class="video-container">
        <video controls>
            <source src="' . $video . '" type="video/mp4">
            Tu navegador no soporta la etiqueta de video.
        </video>
    </div>';
} else {
    echo "<p>Error: El archivo de video no se encuentra.</p>";
}
?>
</body>
</html>
