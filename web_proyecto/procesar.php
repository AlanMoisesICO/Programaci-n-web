<?php
include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $accion = $_POST['accion'];

    if ($accion === 'crear') {
        // Crear cuenta
        $stmt = $conexion->prepare("INSERT INTO usuarios (usuario, contrasena) VALUES (:usuario, :contrasena)");
        try {
            $stmt->execute(['usuario' => $usuario, 'contrasena' => $contrasena]);
            header("Location: bienvenido.php?usuario=" . urlencode($usuario));
        } catch (PDOException $e) {
            die("Error: Usuario ya registrado.");
        }
    } elseif ($accion === 'iniciar') {
        // Iniciar sesión
        $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE usuario = :usuario AND contrasena = :contrasena");
        $stmt->execute(['usuario' => $usuario, 'contrasena' => $contrasena]);
        if ($stmt->rowCount() > 0) {
            header("Location: bienvenido.php?usuario=" . urlencode($usuario));
        } else {
            die("Error: Usuario o contraseña incorrectos.");
        }
    }
}
?>
