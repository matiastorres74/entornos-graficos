<?php
//Si el archivo datos.php contiene el código que sigue:
$color = 'blanco';
$flor = 'clavel';
?>


<?php
//Indicar las salidas que produce el siguiente código. Justificar.
echo "El $flor $color \n"; // $flor y $color todavía no están definidas, entonces php reemplaza por cadena vacía
include 'datos.php';
echo " El $flor $color"; // Aca ya se importaron las variables, por lo tanto si se reconoceran
//Las salidas seria:
//El 
// El clavel blanco
?> 