<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Costos - Agua Pluvial</title>
    <style>
/* {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            background: rgb(77, 146, 163);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 20px;
            color: rgb(0, 63, 79);
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
            background-color: #ffffff;
            padding: 25px 30px;
            border-radius: 10px;
            max-width: 700px;
            margin: 0 auto;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .form-group {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 20px;
        }
        .form-group img {
            width: 60px;
            height: 60px;
            border-radius: 6px;
            object-fit: cover;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }
        .form-group label {
            flex-grow: 1;
        }
        .form-group input[type="number"] {
            width: 80px;
            padding: 6px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
.but, input[type="submit"] {
            background-color: #007f7f;
            color: white;
            padding: 12px 25px;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            display: block;
            margin: 20px auto 0;
            transition: background-color 0.3s;
        }
.but, input[type="submit"]:hover  {
            background-color: #005f5f;
        }


.but :hover {
    background-color: #005f5f;
}
        .total-box {
            background-color: #f1fdfd;
            border-left: 5px solid #00b09e;
            padding: 20px;
            border-radius: 10px;
            max-width: 700px;
            margin: 30px auto;
            font-size: 20px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }
        .total-box h3 {
            color: #005555;
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
</nav>
<h2 class="lei">Selecciona los materiales que deseas calcular</h2>

<form method="post">
    <div class="form-group">
        <input type="checkbox" name="productos[]" value="canaleta">
        <img src="ima/canaletas.jpg" alt="Canaleta">
        <label>Canaleta, lámina galvanizada - 6 metros ($785.00)</label>
        <input type="number" name="cantidad_canaleta" min="1" value="1">
    </div>
    <div class="form-group">
        <input type="checkbox" name="productos[]" value="tuberia">
        <img src="ima/tuberia.png" alt="tuberia">
        <label>Tubería de PVC - 4 metros ($650.00)</label>
        <input type="number" name="cantidad_tuberia" min="1" value="1">
    </div>
    <div class="form-group">
        <input type="checkbox" name="productos[]" value="bidon">
        <img src="ima/bidon.jpg" alt="Bidón">
        <label>Bidón con rejilla - 1,100L ($10,250.00)</label>
        <input type="number" name="cantidad_bidon" min="1" value="1">
    </div>
    <div class="form-group">
        <input type="checkbox" name="productos[]" value="codo">
        <img src="ima/codo.jpg" alt="Codo PVC">
        <label>Codo de PVC - 5 pulgadas ($123.00)</label>
        <input type="number" name="cantidad_codo" min="1" value="1">
    </div>
    <div class="form-group">
        <input type="checkbox" name="productos[]" value="gancho">
        <img src="ima/gancho.jpg" alt="Gancho">
        <label>Ganchos de fijación - Acero 18cm ($169.00)</label>
        <input type="number" name="cantidad_gancho" min="1" value="1">
    </div>
    <div class="form-group">
        <input type="checkbox" name="productos[]" value="pegamento">
        <img src="ima/pegamento.jpg" alt="Pegamento PVC">
        <label>Pegamento de PVC - 240ml ($104.00)</label>
        <input type="number" name="cantidad_pegamento" min="1" value="1">
    </div>
    <input type="submit" value="Calcular Total">
    <button class="but" onclick="window.location.reload()">Reiniciar</button>
    </form>


</body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $precios = [
        "canaleta" => 785,
        "tuberia" => 650,
        "codo" => 123,
        "bidon" => 10250,
        "gancho" => 169,
        "pegamento" => 104
    ];

    $nombres = [
        "canaleta" => "Canaleta",
        "tuberia" => "Tubería de PVC",
        "codo" => "Codo de PVC",
        "bidon" => "Bidón con rejilla",
        "gancho" => "Gancho de fijación",
        "pegamento" => "Pegamento de PVC"
    ];

    $total = 0;
    $detalle = "REPORTE DE COSTOS - AGUA PLUVIAL\n";
    $detalle .= "----------------------------------\n";

    if (!empty($_POST["productos"])) {
        foreach ($_POST["productos"] as $producto) {
            $cantidad_key = "cantidad_" . $producto;
            $cantidad = isset($_POST[$cantidad_key]) && is_numeric($_POST[$cantidad_key]) ? (int)$_POST[$cantidad_key] : 1;
            $subtotal = $precios[$producto] * $cantidad;
            $total += $subtotal;
            $detalle .= $nombres[$producto] . " x $cantidad = $" . number_format($subtotal, 2) . "\n";
        }

        $detalle .= "----------------------------------\n";
        $detalle .= "TOTAL: $" . number_format($total, 2) . "\n";

        // Guardar en archivo .txt
        $nombreArchivo = "reporte_agua_pluvial.txt";
        file_put_contents($nombreArchivo, $detalle);

        // Mostrar resultado en pantalla
        echo "<div class='total-box'>";
        echo "<h3>Total a pagar: $" . number_format($total, 2) . "</h3>";
        echo "<p>El archivo <strong>$nombreArchivo</strong> ha sido creado.</p>";
        echo "<a href='$nombreArchivo' download>Descargar archivo</a>";
        echo "</div>";
    } else {
        echo "<p>No seleccionaste ningún producto.</p>";
    }
}
?>
<script>
    function reiniciar() {
        location.reload();
    }
</script>
</html>