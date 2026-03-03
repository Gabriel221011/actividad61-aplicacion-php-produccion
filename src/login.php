<?php
// login page
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
<h1>Iniciar sesión</h1>
<form action="login_action.php" method="post" class="row g-3 col-md-6">
  <div class="col-12">
    <label class="form-label">Usuario o correo</label>
    <input type="text" class="form-control" name="nombre_usuario" required>
  </div>
  <div class="col-12">
    <label class="form-label">Contraseña</label>
    <input type="password" class="form-control" name="contrasena" required>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Entrar</button>
    <a href="registro.php" class="btn btn-link">Registro</a>
  </div>
</form>
</body>
</html>
