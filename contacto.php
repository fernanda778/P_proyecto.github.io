<!DOCTYPE html>
<html>
<head>
  <title>Página Principal</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

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
    .home { padding: 40px 20px; text-align: center; }
    .cont {
      max-width: 600px;
      margin: auto;
      background: #ffffffcc;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
    }
    h1 { color: #0077b6; margin-bottom: 20px; }
    h3 { color: #005b8f; margin-bottom: 15px; }
    .regis { display: flex; flex-direction: column; align-items: stretch; }
    label { text-align: left; font-weight: bold; margin: 10px 0 5px; }
    .controls {
      padding: 10px;
      border: 1px solid #99d6ff;
      border-radius: 8px;
      background-color: #e6f7ff;
      font-size: 1rem;
      transition: border-color 0.3s;
    }
    .controls:focus { border-color: #3399ff; outline: none; }
    .boton {
      margin-top: 20px;
      padding: 12px;
      background-color: #3399ff;
      color: white;
      font-size: 1rem;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    .boton:hover { background-color: #267ac1; }
    @media (max-width: 600px) {
      .cont { padding: 20px; }
      .controls, .boton { width: 100%; }
    }
  </style>
</head>

<body>
  <nav>
    <div class="container">
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

  <section class="home" id="home">
    <div class="cont">
      <h1>CONTÁCTANOS</h1>
      <div class="form">
        <form class="regis" action="https://formspree.io/f/movdnajl" method="POST">
          <h3>Llene sus datos</h3>

          <label for="nombre">Ingrese su nombre</label>
          <input class="controls" type="text" name="nombre" id="nombre" required>

          <label for="apellido">Ingrese su apellido</label>
          <input class="controls" type="text" name="apellido" id="apellido" required>

          <label for="correo">Ingrese su correo electrónico</label>
          <input class="controls" type="email" name="correo" id="correo" required>

          <label for="mensaje">Comentario</label>
          <textarea class="controls" name="mensaje" id="mensaje" required></textarea>

          <input class="boton" type="submit" value="Enviar">
          <input class="boton" type="button" value="Reiniciar" onclick="reiniciarPagina()">
        </form>
      </div>
    </div>
  </section>

  <script>
    function reiniciarPagina() {
      location.reload();
    }
  </script>
</body>
</html>
