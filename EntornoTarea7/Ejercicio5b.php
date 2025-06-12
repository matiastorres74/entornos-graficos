<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $_SESSION['usuario'] = $_POST['usuario'] ?? '';
  $_SESSION['clave'] = $_POST['clave'] ?? '';
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Sesion iniciada</title>
</head>

<body>
  <h2>Sesion creada</h2>
  <p>Usuario y clave guardados en variables de sesion.</p>
  <p><a href="Ejercicio5c.php">Ver datos de la sesion</a></p>
</body>
</html>