<?php
if (isset($_GET['accion']) && $_GET['accion'] === 'borrar') {
  setcookie('titular_preferido', '', time() - 3600);
  $titular = 'todos';
  $mensaje = "Preferencia eliminada. Mostrando todos los titulares.";
  header("Location: Ejercicio4.php");
  exit();
} else {
  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['titular'])) {
    setcookie('titular_preferido', $_POST['titular'], time() + (365 * 24 * 60 * 60));
    $titular = $_POST['titular'];
    header("Location: Ejercicio4.php");
    exit();
  } elseif (isset($_COOKIE['titular_preferido'])) {
    $titular = $_COOKIE['titular_preferido'];
  } else {
    $titular = 'todos';
  }
  $mensaje = "";
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Periodico</title>
</head>

<body>
  <h1>Bienvenido a nuestro periodico</h1>

  <?php if ($mensaje): ?>
    <p><strong><?= $mensaje ?></strong></p>
  <?php endif; ?>

  <form method="POST" action="Ejercicio4.php">
    <p>Selecciona que tipo de titular queres ver:</p>
    <label><input type="radio" name="titular" value="politica" <?= $titular == 'politica' ? 'checked' : '' ?>> Noticia
      politica</label><br>
    <label><input type="radio" name="titular" value="economia" <?= $titular == 'economia' ? 'checked' : '' ?>> Noticia
      economica</label><br>
    <label><input type="radio" name="titular" value="deportes" <?= $titular == 'deportes' ? 'checked' : '' ?>> Noticia
      deportiva</label><br>
    <button type="submit">Guardar preferencia</button>
  </form>

  <h2>Titulares:</h2>

  <?php
  if ($titular == 'politica' || $titular == 'todos') {
    echo "<h3>Politica: El congreso debate una nueva ley electoral.</h3>";
  }
  if ($titular == 'economia' || $titular == 'todos') {
    echo "<h3>Economia: El dolar alcanza su maximo anual.</h3>";
  }
  if ($titular == 'deportes' || $titular == 'todos') {
    echo "<h3>Deportes: Argentina gana en la eliminatoria.</h3>";
  }
  ?>

  <p><a href="Ejercicio4.php?accion=borrar">Borrar preferencia de titular</a></p>
</body>

</html>