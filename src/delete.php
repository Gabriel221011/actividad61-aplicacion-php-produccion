<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}
require 'config.php';
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
if ($id>0) {
    $mysqli->query("DELETE FROM cartas_clash_royale WHERE cartas_clash_royale_id={$id}");
}
header('Location: home.php');
exit;
