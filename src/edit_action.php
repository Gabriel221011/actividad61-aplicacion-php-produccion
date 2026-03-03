<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}
require 'config.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = (int)$_POST['id'];
    $nombre = $mysqli->real_escape_string($_POST['nombre_carta']);
    $rareza = $mysqli->real_escape_string($_POST['rareza']);
    $nivel = (int)$_POST['nivel'];
    $tipo = $mysqli->real_escape_string($_POST['tipo']);
    $coste = (int)$_POST['coste_elixir'];
    $desc = $mysqli->real_escape_string($_POST['descripcion']);

    $sql = "UPDATE cartas_clash_royale SET nombre_carta='{$nombre}', rareza='{$rareza}', nivel={$nivel}, tipo='{$tipo}', descripcion='{$desc}', coste_elixir={$coste} WHERE cartas_clash_royale_id={$id}";
    if ($mysqli->query($sql)) {
        header('Location: home.php');
        exit;
    } else {
        die('Error: ' . $mysqli->error);
    }
}
