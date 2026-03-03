<?php
require 'config.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $mysqli->real_escape_string($_POST['nombre_usuario']);
    $correo = $mysqli->real_escape_string($_POST['correo']);
    $pass = $_POST['contrasena'];
    $pass2 = $_POST['contrasena2'];
    if ($pass !== $pass2) {
        die('Las contraseñas no coinciden');
    }
    // prevent duplicate username or email
    $check = $mysqli->query("SELECT * FROM usuarios WHERE nombre_usuario='{$user}' OR correo='{$correo}' LIMIT 1");
    if ($check && $check->num_rows > 0) {
        die('El usuario o correo ya existe');
    }
    $hash = password_hash($pass, PASSWORD_DEFAULT);
    $sql = "INSERT INTO usuarios (nombre_usuario, contrasena, correo) VALUES ('{$user}','{$hash}','{$correo}')";
    if ($mysqli->query($sql)) {
        header('Location: login.php');
        exit;
    } else {
        die('Error: ' . $mysqli->error);
    }
}
