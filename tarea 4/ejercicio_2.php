<?php
//a-!
$i = 1;
while ($i <= 10) {
 print $i++;
 /*
 Muestra del 1 al 10
 !*/
}
?>

<?php
$i = 1;
while ($i <= 10):
 print $i;
 $i++;
endwhile;
/*
Muestra del 1 al 10
!*/
?>

<?php
$i = 0;
do {
 print ++$i;
} while ($i<10);
/*
Muestra del 1 al 10

Por lo tanto, sí, son equivalentes en salida, aunque usan distintas estructuras
(while, while: endwhile;, do-while).
!*/
?>


<?php
//b-!
for ($i = 1; $i <= 10; $i++) {
  print $i;
}
//Imprime los números del 1 al 10.
?>

<?php
for ($i = 1; $i <= 10; print $i, $i++) ;
//Imprime los números del 1 al 10. Igual que el anterior, solo que más rebuscado.
?>

<?php
for ($i = 1; ;$i++) {
 if ($i > 10) {
 break;
 }
 print $i;
}
//También imprime los números del 1 al 10.
?>

<?php
$i = 1;
for (; ; ) {
  if ($i > 10) {
    break;
  }
  print $i;
  $i++;
}
//Imprime los números del 1 al 10, usando un for sin condicion.
//Todos los codigos imprimen los numeros del 1 al 10, sin espacios ni saltos. 
//Es decir, son equivalentes en cuanto a la salida, solo que usan distintas variantes de la estructura for.
?>

<?php
//c-!
//…
//…
if ($i == 0) {
 print "i equals 0";
} elseif ($i == 1) {
 print "i equals 1";
} elseif ($i == 2) {
 print "i equals 2";
}
//Usa una estructura de if y elseifs para mostrar distintos textos dependiendo del valor de i =>(0,1,2).
?>

<?php
//…
//…
switch ($i) { 
 case 0:
 print "i equals 0";
 break;
 case 1:
 print "i equals 1";
 break;
 case 2:
 print "i equals 2";
 break;
}
//Usa una estructura de switch case para mostrar distintos textos dependiendo del valor de i =>(0,1,2).
//Son equivalentes en resultado, aunque utilicen distintas estructuras.
?>