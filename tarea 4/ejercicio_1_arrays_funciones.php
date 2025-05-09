<?php
$a = array( 'color' => 'rojo',
    'sabor' => 'dulce',
    'forma' => 'redonda',
    'nombre' => 'manzana',
    4
);
?> 


<?php
$a['color'] = 'rojo';
$a['sabor'] = 'dulce';
$a['forma'] = 'redonda';
$a['nombre'] = 'manzana';
$a[] = 4; // Le agrega el largo fijo
//Son equivalentes, ya que ambos crean una array de 4 posiciones
?> 