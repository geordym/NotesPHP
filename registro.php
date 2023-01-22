<?php
include 'conexion.php';

$username = $_POST['username'];
$password = $_POST['password'];

// Encriptar la contraseña antes de guardarla en la base de datos
$password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
$conn->exec($sql);

//echo "Registro exitoso";

header("Location: registro_exitoso.php");
exit;
?>