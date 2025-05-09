<?php
function comprobar_nombre_usuario($nombre_usuario){
 //compruebo que el tamaño del string sea válido.
    if (strlen($nombre_usuario)<3 || strlen($nombre_usuario)>20){ //longitud entre 3 y 20 caracteres.
        echo $nombre_usuario . " no es válido<br>"; // si es muy corto o muy largo imprime que no es válido.
    return false;
    }
 //compruebo que los caracteres sean los permitidos
$permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_";
for ($i=0; $i<strlen($nombre_usuario); $i++){ // analiza carácter por carácter que sea válido.
    if (strpos($permitidos, substr($nombre_usuario,$i,1))===false){
    echo $nombre_usuario . " no es válido<br>"; // si el carácter no está en la lista entonces no es válido.
    return false;
}
}
echo $nombre_usuario . " es válido<br>"; //muestra que el nombre es válido
return true;
} 


$a="Raul";
$b='sajihaflas;';
$c="aa";
$d='aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa';
comprobar_nombre_usuario($a);
comprobar_nombre_usuario($b);
comprobar_nombre_usuario($c);
comprobar_nombre_usuario($d);
?>