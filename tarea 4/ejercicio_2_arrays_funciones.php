<?php
//a)
$matriz = array("x" => "bar", 12 => true);
echo $matriz["x"]; // muestra "bar"
echo $matriz[12]; // al ser verdadero toma el valor de 1
// salida final: bar1
?>

<?php
//b)
$matriz = array("unamatriz" => array(6 => 5, 13 => 9, "a" => 42));
echo $matriz["unamatriz"][6]; //Muestra 5
echo $matriz["unamatriz"][13]; //Muestra 9
echo $matriz["unamatriz"]["a"];//Muestra 42
?>

<?php
//c)
$matriz = array(5 => 1, 12 => 2);
$matriz[] = 56; //Define el tamaño fijo de la matriz
$matriz["x"] = 42; unset($matriz[5]); unset($matriz);
//Crea un array asociativo con claves numéricas y alfanuméricas.
//Agrega un valor automáticamente al final.
//Modifica y elimina elementos del array.
//Finalmente, elimina toda la variable $matriz
?> 