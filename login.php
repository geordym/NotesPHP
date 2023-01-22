<?php
include 'conexion.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username'";
$stmt = $conn->prepare($sql);
$stmt->execute();

$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user) {
    if (password_verify($password, $user['password'])) {
        // Iniciar sesión
        session_start();
        $_SESSION['user_id'] = $user['id'];
        echo "Inicio de sesión exitoso";
        header("Location: notas_view.php");
        exit;
    } else {
        // Redirigir al usuario a la página de error de inicio de sesión
        header("Location: login_error.php");
        exit;
    }
}   else {
    // Redirigir al usuario a la página de error de inicio de sesión
    header("Location: login_error.php");
    exit;
}
?>