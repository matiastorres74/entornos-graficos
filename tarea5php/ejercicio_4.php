<?php
session_start(); 

if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 1;
} else {
    $_SESSION['contador']++;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contador de páginas</title>
</head>
<body>
    <h2>Contador de páginas visitadas</h2>
    <p>Has visitado esta página <strong><?php echo $_SESSION['contador']; ?></strong> veces durante esta sesión.</p>
    <p><a href="contador.php">Actualizar</a></p>
    <p><a href="resetear.php">Resetear contador</a></p>
</body>
</html>