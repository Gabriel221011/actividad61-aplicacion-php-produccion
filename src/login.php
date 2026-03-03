<?php
// login page
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="login.php">
      <img src="https://static.wikia.nocookie.net/clashroyale/images/0/0f/Clash_Royale_Logo.png" alt="Logo">
      Clash Royale App
    </a>
  </div>
</nav>
<div class="container d-flex justify-content-center align-items-center" style="min-height:70vh;">
  <div class="card p-4" style="width:100%; max-width:400px;">
    <h2 class="text-center mb-3">Iniciar sesión</h2>
    <form action="login_action.php" method="post" class="row g-3">
      <div class="col-12">
        <label class="form-label">Usuario o correo</label>
        <input type="text" class="form-control" name="nombre_usuario" required>
      </div>
      <div class="col-12">
        <label class="form-label">Contraseña</label>
        <input type="password" class="form-control" name="contrasena" required>
      </div>
      <div class="col-12 text-center">
        <button type="submit" class="btn btn-primary">Entrar</button>
        <a href="registro.php" class="btn btn-secondary">Registro</a>
      </div>
    </form>
  </div>
</div>
</body>
</html>
