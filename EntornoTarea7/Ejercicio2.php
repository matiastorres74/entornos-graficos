<?php
$expira = time() + (365 * 24 * 60 * 60);

if (isset($_COOKIE['contador'])) {
  $contador = $_COOKIE['contador'] + 1;
  setcookie("contador", $contador, $expira);
  $mensaje = "Has visitado esta pagina $contador veces.";
} else {
  $contador = 1;
  setcookie("contador", $contador, $expira);
  $mensaje = "¡Bienvenido! Esta es tu primera visita.";
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Contador de visitas</title>
</head>

<body>
  <h1><?php echo $mensaje; ?></h1>
</body>

</html>