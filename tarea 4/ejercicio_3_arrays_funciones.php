<?php
//a-
$fun = getdate();
echo "Has entrado en esta pagina a las $fun[hours] horas, con $fun[minutes] minutos y $fun[seconds]
segundos, del $fun[mday]/$fun[mon]/$fun[year]";
/*La funcion getdate() devuelve un array asociativo con la fecha y hora actuales.
Se accede directamente a los valores del array por sus nombres.
Se muestra un mensaje con la hora y fecha actual del servidor.*/
?>

<?php
//b-
function sumar($sumando1, $sumando2) //se indica void para no retornar un valor
{
  $suma = $sumando1 + $sumando2;
  echo $sumando1 . "+" . $sumando2 . "=" . $suma;
}
sumar(5, 6);
/*Define una función sumar que toma dos argumentos.
Suma los valores y los muestra con formato tipo operación matemática.*/
?>