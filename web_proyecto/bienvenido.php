<?php
$usuario = isset($_GET['usuario']) ? htmlspecialchars($_GET['usuario']) : 'Usuario';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="fondo">
        <div class="contenedor">
            <h1>Bienvenido: <?php echo $usuario; ?></h1>
            <p>¿Sabías que el cerebro humano tiene más conexiones neuronales que estrellas en la Vía Láctea?</p>
        </div>
    </div>
</body>
</html>
