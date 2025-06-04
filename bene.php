<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Beneficios</title>
  <style>
  /*  body {
      margin: 0;
      padding: 30px;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to bottom right, #d7f3ff, #eefbff);
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


    form {
      text-align: center;
      margin-bottom: 30px;
    }

    label {
      display: inline-block;
      margin: 10px 20px;
      font-size: 1.1rem;
      cursor: pointer;
      background-color: #cceeff;
      padding: 10px 20px;
      border-radius: 8px;
      transition: background-color 0.3s ease, transform 0.2s ease;
    }

    input[type="radio"] {
      margin-right: 10px;
    }

    label:hover {
      background-color: #a6dfff;
      transform: scale(1.05);
    }

    #contenido {
      max-width: 700px;
      margin: 0 auto 20px auto;
      padding: 20px;
      background-color: #e6f7ff;
      border: 2px solid #99ccff;
      border-radius: 10px;
      font-size: 1.1rem;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    #contenido p {
      margin: 0;
    }

    .info-section {
      max-width: 700px;
      margin: 0 auto;
      text-align: center;
    }

    .info-section img {
      width: 100%;
      max-width: 400px;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
      transition: transform 0.3s ease;
    }

    .info-section img:hover {
      transform: scale(1.05);
    }
.info-flex {
  display: flex;
  justify-content: center;
  align-items: flex-start;
  gap: 20px;
  flex-wrap: wrap;
  max-width: 1100px;
  margin: 0 auto 30px;
}

#contenido, .info-section {
  flex: 1 1 45%;
  max-width: 500px;
}

    @media (max-width: 600px) {
      label {
        display: block;
        margin: 10px auto;
      }

      .header-buttons {
        flex-direction: column;
        align-items: flex-start;
        width: 100%;
        margin-top: 10px;
      }

      .header-buttons button {
        margin: 5px 0;
        width: 100%;
      }
    }
  </style>

  <script>
    function mostrarContenido() {
const contenido = {
  casa: `
    <b>CASA</b><br>
    <b>-Uso beneficioso del agua:</b> Se puede emplear para riego, limpieza y hasta consumo humano con el tratamiento adecuado.<br>
    <b>-Menor gasto de servicio :</b> Disminuye la factura del agua al aprovechar un recurso gratuito.<br>
    <b>-Autonomía hídrica:</b> Reduce la dependencia de redes de abastecimiento, especialmente en temporadas de sequía.<br>
    <b>-Conciencia ecológica:</b> Fomenta hábitos responsables en el uso del agua.`,
  comunidad: `
    <b>COMUNIDAD</b><br>
    <b>-Reducción de escasez hídrica:</b> Permite abastecer zonas con problemas de suministro de agua potable.<br>
    <b>-Menos inundaciones:</b> Al recolectar el agua de lluvia, se evita la acumulación en calles y drenajes.<br>
    <b>-Sostenibilidad ambiental:</b> Disminuye la extracción de agua subterránea y protege los ecosistemas locales.<br>
    <b>-Ahorro económico:</b> Reduce costos en el suministro de agua y tratamiento de aguas residuales.
  `,
  escuela: `
    <b>ESCUELA</b><br>
    <b>-Mejora la higiene:</b> Garantiza agua para lavado de manos y limpieza de instalaciones.<br>
    <b>-Educación ambiental:</b> Enseña a los estudiantes sobre el cuidado del agua y la sostenibilidad.<br>
    <b>-Reducción de costos:</b> Disminuye el gasto en agua potable para baños y áreas comunes.<br>
    <b>-Resiliencia ante crisis hídricas: </b>Asegura el suministro en épocas de escasez.
  `
};

      const imagenes = {
        casa: "ima/casa.jpg",
        comunidad: "ima/comu.jpg",
        escuela: "ima/ESCU.jpg"
      };

      const seleccion = document.querySelector('input[name="selected"]:checked');
      if (seleccion) {
        document.getElementById("contenido").innerHTML = `<p>${contenido[seleccion.value]}</p>`;
        document.getElementById("info-apartado").innerHTML = `<img src="${imagenes[seleccion.value]}" alt="Imagen representativa">`;
      }
    }
    function regresar() {
      window.location.href = "index.php";
    }

    function reiniciar() {
      location.reload();
    }
  </script>
</head>

<body>
  <header>
<nav>
  <div class="container">
  <h2 class="lio">CAPTACIÓN DE AGUA PLUVIAL</h2>
<a href="index.html">Inicio</a>
  <a href="area.php">Área</a>
  <a href="clima.php">Clima</a>
  <a href="bene.php">Beneficios</a>
  <a href="huella.php">Huella hídrica</a>
  <a href="presu.php">Presupuestos</a>
  <a href="contacto.php">Contacto</a>
  <a href="actual.html">Tiempo actual</a>
</nav>
  </header>
<h2 class="lei">Beneficios de la captacion de agua pluvial</h2>

  <form>
    <label>
      <input type="radio" name="selected" value="casa" onchange="mostrarContenido()"> CASA
    </label>
    <label>
      <input type="radio" name="selected" value="comunidad" onchange="mostrarContenido()"> COMUNIDAD
    </label>
    <label>
      <input type="radio" name="selected" value="escuela" onchange="mostrarContenido()"> ESCUELA
    </label>
  </form>

<div class="info-flex">
  <div id="contenido"></div>
  <div id="info-apartado" class="info-section"></div>

</div>

</body>
</html>
