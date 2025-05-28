<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Recomendar sitio</title>
</head>

<body>
  <h2>Recomendar este sitio a un amigo</h2>
  <form action="enviar_recomendacion.php" method="post">
    Tu nombre: <input type="text" name="nombre" required><br><br>
    Tu email: <input type="email" name="tu_email" required><br><br>
    Email de tu amigo: <input type="email" name="email_amigo" required><br><br>
    Comentario:<br>
    <textarea name="comentario" rows="5" cols="40"></textarea><br><br>
    <input type="submit" value="Enviar recomendación">
  </form>
</body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = htmlspecialchars($_POST['nombre']);
  $tu_email = htmlspecialchars($_POST['tu_email']);
  $email_amigo = htmlspecialchars($_POST['email_amigo']);
  $comentario = nl2br(htmlspecialchars($_POST['comentario']));

  $asunto = "$nombre te recomienda visitar un sitio web";

  $mensaje = "
    <html>
    <head><title>Recomendación de sitio</title></head>
    <body>
        <p>Hola,</p>
        <p>Tu amigo <strong>$nombre</strong> (<a href='mailto:$tu_email'>$tu_email</a>) te recomienda visitar el siguiente sitio:</p>
        <p><a href='https://www.tusitio.com'>https://www.tusitio.com</a></p>
        <p><strong>Comentario:</strong><br>$comentario</p>
    </body>
    </html>
    ";

  $headers = "MIME-Version: 1.0\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8\r\n";
  $headers .= "From: $nombre <$tu_email>\r\n";

  if (mail($email_amigo, $asunto, $mensaje, $headers)) {
    echo "¡Gracias! Tu recomendación fue enviada.";
  } else {
    echo "Error al enviar la recomendación.";
  }
}
?>

</html>