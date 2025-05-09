<html>
<head><title>Documento 1</title></head>
<body>
<?php
    echo "<table width = 90% border = '1' >";
    $row = 5;
    $col = 2;
    for ($r = 1; $r <= $row; $r++) {
        echo "<tr>";
    for ($c = 1; $c <= $col;$c++) {
        echo "<td>&nbsp;</td>\n";
    } 
    echo "</tr>\n";
    }
    echo "</table>\n";
?>
</body></html>
<!--Abre una tabla HTML con:
Ancho del 90% de la página (width = 90%)
Borde de 1 píxel (border = '1')
Usa dos bucles for: Uno para generar 5 filas ($row = 5),Otro para generar 2 columnas por fila ($col = 2)
Cada celda de la tabla (<td>) contiene un espacio en blanco (&nbsp;) para que sea visible aunque esté vacía.-->


<html>
<head><title>Documento 2</title></head>
<body>
<?php
if (!isset($_POST['submit'])) { //si el formulario no fue enviado se muestra
?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> <!--Pide la edad al usuario. Usa POST para enviar los datos.-->
    Edad: <input name="age" size="2">                               <!--El action usa $_SERVER['PHP_SELF'], es decir, el mismo archivo procesará el formulario (autoprocesado).-->
    <input type="submit" name="submit" value="Ir">
    </form>
<?php
    }
else { // entra cuando el formulario ya fue enviado
    $age = $_POST['age']; // $age recibe el valor que el usuario escribió
    if ($age >= 21) {  // verifica si $age es mayor a 21, si lo es imprime "Mayor de edad", sino "Menor de edad"
        echo 'Mayor de edad';
    }
    else {
        echo 'Menor de edad'; 
    }
}
?>
</body></html>
<!--este codigo sirve para crear un formulario web que pide al usuario su edad 
y luego muestra si es "Mayor de edad" o "Menor de edad" según el valor ingresado.-->


