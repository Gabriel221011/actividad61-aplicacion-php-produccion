<?php
require 'config.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $mysqli->real_escape_string($_POST['nombre_usuario']);
    $pass = $_POST['contrasena'];
    // allow login by username OR email
    $res = $mysqli->query("SELECT * FROM usuarios WHERE nombre_usuario='{$user}' OR correo='{$user}' LIMIT 1");
    if ($res && $res->num_rows===1) {
        $row = $res->fetch_assoc();
        if (password_verify($pass, $row['contrasena'])) {
            session_start();
            $_SESSION['user'] = $row['nombre_usuario'];
            header('Location: home.php');
            exit;
        }
    }
    die('Credenciales inválidas');
}
