<?php
$enviado = false;
$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nombre = strip_tags(trim($_POST['nombre'] ?? ''));
  $email = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
  $mensaje = strip_tags(trim($_POST['mensaje'] ?? ''));

  if ($nombre && $email && $mensaje) {
    $para = 'nnn@hotmail.com';
    $asunto = 'Consulta desde el sitio web';

    $contenido = "
        <html>
        <head><title>Nuevo mensaje de contacto</title></head>
        <body>
            <h2>Mensaje recibido desde el sitio web</h2>
            <p><strong>Nombre:</strong> {$nombre}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Mensaje:</strong><br>" . nl2br($mensaje) . "</p>
        </body>
        </html>
        ";

    $cabeceras = "MIME-Version: 1.0\r\n";
    $cabeceras .= "Content-type:text/html;charset=UTF-8\r\n";
    $cabeceras .= "From: $nombre <$email>\r\n";
    $cabeceras .= "Reply-To: $email\r\n";

    $enviado = mail($para, $asunto, $contenido, $cabeceras);
    if (!$enviado) {
      $error = 'Hubo un problema al enviar el mensaje. Inténtalo más tarde.';
    }
  } else {
    $error = 'Por favor, completá todos los campos correctamente.';
  }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Contacto</title>
</head>

<body>
  <h1>Formulario de Contacto</h1>

  <?php if ($enviado): ?>
    <p style="color: green;">Tu mensaje fue enviado con éxito. ¡Gracias por contactarnos!</p>
  <?php elseif ($error): ?>
    <p style="color: red;"><?= htmlspecialchars($error) ?></p>
  <?php endif; ?>

  <form action="contacto.php" method="post">
    <label for="nombre">Nombre:</label><br>
    <input type="text" name="nombre" id="nombre" required><br><br>

    <label for="email">Correo electrónico:</label><br>
    <input type="email" name="email" id="email" required><br><br>

    <label for="mensaje">Mensaje:</label><br>
    <textarea name="mensaje" id="mensaje" rows="6" required></textarea><br><br>

    <button type="submit">Enviar</button>
  </form>
</body>

</html>