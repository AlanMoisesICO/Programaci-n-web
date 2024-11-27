<?php include('db.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Conocimiento en Línea</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="fondo">
        <div class="contenedor">
            <h1>Conocimiento en Línea</h1>
            <form action="procesar.php" method="post">
                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" name="usuario" required>
                <label for="contrasena">Contraseña:</label>
                <input type="password" id="contrasena" name="contrasena" required>
                <button type="submit" name="accion" value="iniciar">Iniciar Sesión</button>
                <button type="submit" name="accion" value="crear">Crear Cuenta</button>
            </form>
        </div>
    </div>
</body>
</html>
