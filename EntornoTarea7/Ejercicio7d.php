<?php
session_start();
include 'Ejercicio7.php';

echo "<h1>Tu Carrito</h1>";

if (!isset($_SESSION['carrito']) || empty($_SESSION['carrito'])) {
    echo "<p>El carrito está vacío.</p>";
    echo '<a href="index.php">Volver al catálogo</a>';
    exit();
}

$total = 0;

echo '<table border="1" cellpadding="10">';
echo '<tr><th>Producto</th><th>Precio</th><th>Cantidad</th><th>Total</th></tr>';

foreach ($_SESSION['carrito'] as $id => $cantidad) {
    $res = $conn->query("SELECT * FROM catalogo WHERE id = $id");
    if ($res && $res->num_rows > 0) {
        $producto = $res->fetch_assoc();
        $subtotal = $producto['Precio'] * $cantidad;
        $total += $subtotal;

        echo "<tr>
                <td>{$producto['Producto']}</td>
                <td>\${$producto['Precio']}</td>
                <td>{$cantidad}</td>
                <td>\$" . number_format($subtotal, 2) . "</td>
              </tr>";
    }
}

echo "<tr><td colspan='3'><strong>Total</strong></td><td><strong>\$" . number_format($total, 2) . "</strong></td></tr>";
echo '</table>';
?>

<a href="Ejercicio7b.php">Seguir comprando</a>