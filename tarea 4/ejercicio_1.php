<?php
function doble($i) { //"function doble(i)" funcion definida por el usuario
    return $i*2;//'*' operador aritmetico
}
$a = TRUE; //booleano
$b = "xyz"; //string detecta caracteres especiales
$c = 'xyz'; //string no detecta caracteres especiales
$d = 12; //entero
echo gettype($a); //Bool, "gettype()" obtiene el tipo de dato
echo gettype($b); //string  
echo gettype($c); //string
echo gettype($d); //integer
if (is_int($d)) { //pregunta si $d es una variable de tipo int, al ser verdadero se le suma 4
    $d += 4; //'+=' operador de asignacion
}
if (is_string($a)) { //pregunta si $a es una variable de tipo string, devuelve true si lo es.
    echo "Cadena: $a";//Al ser falso no se ejecutaria
}
$d = $a ? ++$d : $d*3;// "=" asignacion, "? :" condicional ternario,"++" incremento; si $a es true incrementa $d, sino lo multiplica por 3
$f = doble($d++); // "=" asignación; "++" incremento; "double()" devuelve el doble del número
$g = $f += 10; // "+=" operador de asignación y suma; "=" operador de asignación
echo $a, $b, $c, $d, $f , $g; // "echo" imprime valores en pantalla, la salida seria: (1xyzxyz184444)
?> 

