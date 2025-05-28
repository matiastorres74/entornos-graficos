<?php
$destinatario = "fossatinico96@gmail.com";
$asunto = "Prueba";
$cuerpo = '
<html>
<head>
 <title>Envio de mail</title>
</head>
<body>
<h1>Hola!</h1>
<p>
<b>Esto es una prueba</b>.
xxxxxxxxxxxxxxxxxxxxxxxxxxx
</p>
</body>
</html>
';

$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: fossatinico96@gmail.com\r\n"; // Podés cambiarlo por otro

if(mail($destinatario, $asunto, $cuerpo, $headers)) {
    echo "Correo enviado con éxito.";
} else {
    echo "Error al enviar el correo.";
}
?>