<?php
$DB_HOST = getenv('DB_HOST') ?: '127.0.0.1';
$DB_NAME = getenv('DB_NAME') ?: 'clash_royale';
$DB_USER = getenv('DB_USER') ?: 'usuarioGCalvo';
$DB_PASS = getenv('DB_PASS') ?: 'GabrielCalvo@2006';

$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if ($mysqli->connect_errno) {
    die('Error al conectar a la base de datos: ' . $mysqli->connect_error);
}
$mysqli->set_charset('utf8mb4');
?>
