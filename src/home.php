<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}
require 'config.php';

$result = $mysqli->query('SELECT * FROM cartas_clash_royale ORDER BY cartas_clash_royale_id DESC');
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cartas - Clash Royale</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php">Clash Royale</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><span class="nav-link">Usuario: <?php echo htmlspecialchars($_SESSION['user']); ?></span></li>
        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<h1>Cartas Clash Royale</h1>
<p><a class="btn btn-primary" href="add.php">Agregar carta</a></p>
<table class="table table-bordered">
<tr><th>ID</th><th>Nombre</th><th>Rareza</th><th>Nivel</th><th>Coste</th><th>Acciones</th></tr>
<?php while($row = $result->fetch_assoc()): ?>
<tr>
<td><?php echo $row['cartas_clash_royale_id']; ?></td>
<td><?php echo htmlspecialchars($row['nombre_carta']); ?></td>
<td><?php echo htmlspecialchars($row['rareza']); ?></td>
<td><?php echo $row['nivel']; ?></td>
<td><?php echo $row['coste_elixir']; ?></td>
<td>
  <a class="btn btn-sm btn-secondary" href="edit.php?id=<?php echo $row['cartas_clash_royale_id']; ?>">Editar</a>
  <a class="btn btn-sm btn-danger" href="delete.php?id=<?php echo $row['cartas_clash_royale_id']; ?>" onclick="return confirm('Eliminar?')">Eliminar</a>
</td>
</tr>
<?php endwhile; ?>
</table>
</body>
</html>
