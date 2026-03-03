<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}
require 'config.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $mysqli->real_escape_string($_POST['nombre_carta']);
    $rareza = $mysqli->real_escape_string($_POST['rareza']);
    $nivel = (int)$_POST['nivel'];
    $tipo = $mysqli->real_escape_string($_POST['tipo']);
    $coste = (int)$_POST['coste_elixir'];
    $desc = $mysqli->real_escape_string($_POST['descripcion']);

    // check unique field not duplicated
    $chk = $mysqli->query("SELECT 1 FROM cartas_clash_royale WHERE nombre_carta='{$nombre}' LIMIT 1");
    if ($chk && $chk->num_rows>0) {
        die('Ya existe una carta con ese nombre');
    }

    $sql = "INSERT INTO cartas_clash_royale (nombre_carta, rareza, nivel, tipo, descripcion, coste_elixir) VALUES ('{$nombre}','{$rareza}',{$nivel},'{$tipo}','{$desc}',{$coste})";
    if ($mysqli->query($sql)) {
        header('Location: home.php');
        exit;
    } else {
        die('Error: ' . $mysqli->error);
    }
}
