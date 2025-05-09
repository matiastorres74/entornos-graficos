<?
//contador.php
// Archivo para acumular el numero de visitas
$archivo = "contador.dat";
// Abrir el archivo para lectura
$abrir = fopen($archivo, "r");
// Leer el contenido del archivo
$cont = fread($abrir, filesize($archivo));
// Cerrar el archivo
fclose($abrir);
// Abrir nuevamente el archivo para escritura
$abrir = fopen($archivo, "w");
// Agregar 1 visita
$cont = $cont + 1;
// Guardar la modificación
$guardar = fwrite($abrir, $cont);
// Cerrar el archivo
fclose($abrir);
// Mostrar el total de visitas
echo "<font face='arial' size='3'>Cantidad de visitas:" . $cont . "</font>";
/*El código contador.php implementa un contador de visitas a una página web utilizando un archivo plano
(contador.dat) para guardar y actualizar el número de visitas.
Cada vez que alguien accede a la página que contiene contador.php, el archivo contador.dat se abre, 
se lee, se incrementa en 1, y se vuelve a guardar. El nuevo número de visitas se muestra al usuario.*/
?>


<!-- visitas.php -->
<!-- Página que va a contener al contador de visitas -->
<html>
<head></head>
<body>
<? include("contador.php") ?>
</body>
</html>
 <!-- El archivo visitas.php está diseñado para incluir el contador de visitas dentro de una página web.
 Cada vez que se accede a visitas.php, se ejecuta el contador y se muestra la cantidad de visitas. -->