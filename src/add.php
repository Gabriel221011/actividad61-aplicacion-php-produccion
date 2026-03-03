<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Agregar Carta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
<img src="https://static.wikia.nocookie.net/clashroyale/images/0/0f/Clash_Royale_Logo.png" alt="Clash Royale" style="height:60px;"/>
<h1 class="mt-3">Agregar Carta</h1>
<form action="add_action.php" method="post" class="row g-3">
  <div class="col-md-6">
    <label class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre_carta" required>
  </div>
  <div class="col-md-6">
    <label class="form-label">Rareza</label>
    <select class="form-select" name="rareza" required>
      <option value="Comun">Comun</option>
      <option value="Rara">Rara</option>
      <option value="Epica">Épica</option>
      <option value="Legendaria">Legendaria</option>
    </select>
  </div>
  <div class="col-md-4">
    <label class="form-label">Nivel</label>
    <input type="number" class="form-control" name="nivel" required>
  </div>
  <div class="col-md-4">
    <label class="form-label">Tipo</label>
    <input type="text" class="form-control" name="tipo" required>
  </div>
  <div class="col-md-4">
    <label class="form-label">Coste Elixir</label>
    <input type="number" class="form-control" name="coste_elixir" required>
  </div>
  <div class="col-12">
    <label class="form-label">Descripción</label>
    <textarea class="form-control" name="descripcion"></textarea>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Guardar</button>
    <button type="button" class="btn btn-secondary" onclick="window.location='home.php'">Cancelar</button>
  </div>
</form>
</body>
</html>
