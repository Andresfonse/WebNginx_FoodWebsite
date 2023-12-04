<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$conexion = new mysqli('localhost', 'root', '', 'kfc');

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$new_username = $conexion->real_escape_string($_POST['new_username']);
$new_password = password_hash($conexion->real_escape_string($_POST['new_password']), PASSWORD_DEFAULT);

$sql = "INSERT INTO users (name, password, registration_date) VALUES ('$new_username', '$new_password', NOW())";

if ($conexion->query($sql) === TRUE) {
    header("Location: init.php");
} else {
    echo "Error al registrar usuario: " . $conexion->error;
}

$conexion->close();
?>
