<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Datos de la sesion</title>
</head>

<body>
  <h2>Datos guardados en la sesion</h2>

  <?php if (isset($_SESSION['usuario']) && isset($_SESSION['clave'])): ?>
    <p><strong>Usuario:</strong> <?= htmlspecialchars($_SESSION['usuario']) ?></p>
    <p><strong>Clave:</strong> <?= htmlspecialchars($_SESSION['clave']) ?></p>
  <?php else: ?>
    <p>No hay datos de sesion disponibles.</p>
  <?php endif; ?>

  <p><a href="Ejercicio5a.php">Volver al inicio</a></p>
</body>
</html>