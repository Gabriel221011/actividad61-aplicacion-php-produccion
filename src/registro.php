<?php
// registration page
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
<h1>Registro de usuario</h1>
<form action="registro_action.php" method="post" class="row g-3 col-md-6">
  <div class="col-12">
    <label class="form-label">Usuario</label>
    <input type="text" class="form-control" name="nombre_usuario" required>
  </div>
  <div class="col-12">
    <label class="form-label">Correo</label>
    <input type="email" class="form-control" name="correo" required>
  </div>
  <div class="col-6">
    <label class="form-label">Contraseña</label>
    <input type="password" class="form-control" name="contrasena" required>
  </div>
  <div class="col-6">
    <label class="form-label">Repetir contraseña</label>
    <input type="password" class="form-control" name="contrasena2" required>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Registrar</button>
    <a href="login.php" class="btn btn-secondary">Volver a login</a>
  </div>
</form>
</body>
</html>
