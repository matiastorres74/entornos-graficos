<?php
include 'Ejercicio7.php';

$result = $conn->query("SELECT * FROM catalogo");
?>

<h1>Catálogo de Productos</h1>
<table border="1" cellpadding="10">
    <tr><th>Producto</th><th>Precio</th><th>Acción</th></tr>
    <?php while ($row = $result->fetch_assoc()) { ?>
    <tr>
        <td><?= $row['Producto'] ?></td>
        <td>$<?= $row['Precio'] ?></td>
        <td><a href="Ejercicio7b.php?id=<?= $row['id'] ?>">Agregar al carrito</a></td>
    </tr>
    <?php } ?>
</table>

<a href="Ejercicio7d.php">Ver Carrito</a>
