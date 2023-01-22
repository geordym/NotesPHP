<?php
include 'conexion.php';

$name = $_POST['name'];
$description = $_POST['description'];
$user_id = $_POST['user_id'];


$sql = "INSERT INTO notes (name, description, user_id) VALUES ('$name', '$description', '$user_id')";
$conn->exec($sql);

header("Location: notas_view.php");

echo "New record created successfully";
?>