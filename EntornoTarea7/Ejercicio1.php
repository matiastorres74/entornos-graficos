<?php
if (isset($_POST["estilo"])) {
    $estilo = $_POST["estilo"];
    setcookie("estilo", $estilo, time() + (60 * 60 * 24 * 90)); // 90 días
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
} elseif (isset($_COOKIE["estilo"])) {
    $estilo = $_COOKIE["estilo"];
} else {
    $estilo = "verde"; 
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
    <link rel="stylesheet" href="<?= $estilo ?>.css">
</head>
<body>
    <form action="" method="post">
        <p>Selecciona el estilo o color de fondo de la página:</p>
        <select name="estilo">
            <option value="verde" <?= $estilo == "verde" ? "selected" : "" ?>>Verde</option>
            <option value="rosa" <?= $estilo == "rosa" ? "selected" : "" ?>>Rosa</option>
            <option value="negro" <?= $estilo == "negro" ? "selected" : "" ?>>Negro</option>
        </select>
        <input type="submit" value="Actualizar el estilo">
    </form>

    <p>Estilo actual: <strong><?= htmlspecialchars($estilo) ?></strong></p>
</body>
</html>