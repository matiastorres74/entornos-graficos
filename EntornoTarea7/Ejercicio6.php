<?php
session_start();

$host = "localhost";
$user = "root";
$password = "";
$dbname = "base2";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

if (isset($_POST['mail'])) {
    $mail = $_POST['mail'];

   
    $sql = "SELECT nombre FROM alumnos WHERE mail = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $mail);
    $stmt->execute();
    $result = $stmt->get_result();

   
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['nombre'] = $row['nombre'];
    } else {
        $mensaje_error = "El email ingresado no se encuentra registrado.";
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ingreso de Alumno</title>
</head>
<body>

<?php
if (isset($_SESSION['nombre'])) {
    echo "<h1>Bienvenido/a " . htmlspecialchars($_SESSION['nombre']) . "!</h1>";
    echo "<a href='?cerrar=1'>Cerrar sesión</a>";
} else {
   
    if (isset($mensaje_error)) {
        echo "<p style='color:red;'>$mensaje_error</p>";
    }
?>
    <h1>Ingreso de Alumno</h1>
    <form action="" method="post">
        <label for="mail">Ingrese su email:</label>
        <input type="email" name="mail" id="mail" required>
        <button type="submit">Ingresar</button>
    </form>
<?php
}

if (isset($_GET['cerrar'])) {
    session_destroy();
    header("Location: " . strtok($_SERVER["REQUEST_URI"], '?'));
}
?>

</body>
</html>