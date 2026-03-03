<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}
require 'config.php';
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$res = $mysqli->query("SELECT * FROM cartas_clash_royale WHERE cartas_clash_royale_id={$id}");
if (!$res || $res->num_rows===0) die('Registro no encontrado');
$row = $res->fetch_assoc();
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Editar Carta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php">
      <img src="https://static.wikia.nocookie.net/clashroyale/images/0/0f/Clash_Royale_Logo.png" alt="Logo">
      Clash Royale
    </a>
  </div>
</nav>
<div class="container">
<h1 class="mt-3">Editar Carta</h1>
<form action="edit_action.php" method="post" class="row g-3">
  <input type="hidden" name="id" value="<?php echo $row['cartas_clash_royale_id']; ?>">
  <div class="col-md-6">
    <label class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre_carta" value="<?php echo htmlspecialchars($row['nombre_carta']); ?>" disabled>
  </div>
  <div class="col-md-6">
    <label class="form-label">Rareza</label>
    <select class="form-select" name="rareza" required>
      <?php
        $opts = ['Comun','Rara','Epica','Legendaria'];
        foreach ($opts as $opt) {
            $sel = $row['rareza']===$opt ? 'selected' : '';
            echo "<option value=\"$opt\" $sel>$opt</option>";
        }
      ?>
    </select>
  </div>
  <div class="col-md-4">
    <label class="form-label">Nivel</label>
    <input type="number" class="form-control" name="nivel" value="<?php echo $row['nivel']; ?>" required>
  </div>
  <div class="col-md-4">
    <label class="form-label">Tipo</label>
    <input type="text" class="form-control" name="tipo" value="<?php echo htmlspecialchars($row['tipo']); ?>" required>
  </div>
  <div class="col-md-4">
    <label class="form-label">Coste Elixir</label>
    <input type="number" class="form-control" name="coste_elixir" value="<?php echo $row['coste_elixir']; ?>" required>
  </div>
  <div class="col-12">
    <label class="form-label">Descripción</label>
    <textarea class="form-control" name="descripcion"><?php echo htmlspecialchars($row['descripcion']); ?></textarea>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Actualizar</button>
    <button type="button" class="btn btn-secondary" onclick="window.location='home.php'">Cancelar</button>
  </div>
</form>
</div>
</body>
</html>
