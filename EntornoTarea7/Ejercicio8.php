<?php
$conexion = new mysqli("localhost", "root", "", "buscadorCan");

if ($conexion->connect_error) {
  die("Error de conexion: " . $conexion->connect_error);
}
$resultado = null;
if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST["buscar"])) {
  $busqueda = $conexion->real_escape_string($_POST["buscar"]);
  $sql = "SELECT * FROM buscador WHERE canciones LIKE '%$busqueda%'";
  $resultado = $conexion->query($sql);
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Buscador de Canciones</title>
</head>

<body>
  <h2>Buscar canciones</h2>
  <form method="POST" action="Ejercicio8.php">
    <input type="text" name="buscar" placeholder="Nombre de la cancion" required>
    <button type="submit">Buscar</button>
  </form>

  <?php if ($resultado !== null): ?>
    <h3>Resultados:</h3>
    <?php if ($resultado->num_rows > 0): ?>
      <ul>
        <?php while ($fila = $resultado->fetch_assoc()): ?>
          <li><?= htmlspecialchars($fila["canciones"]) ?></li>
        <?php endwhile; ?>
      </ul>
    <?php else: ?>
      <p>No se encontraron canciones que coincidan</p>
    <?php endif; ?>
  <?php endif; ?>
</body>

</html>