<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$conexion = new mysqli('localhost', 'root', '', 'kfc');

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$username = $conexion->real_escape_string($_POST['username']);
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE name='$username'";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        session_start();
        $_SESSION['username'] = $username;
        header("Location: index.php");
        exit();
    } else {
        echo "Contraseña incorrecta";
    }
} else {
    echo "Usuario no encontrado";
}

$conexion->close();
?>
