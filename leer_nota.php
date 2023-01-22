<?php
include 'conexion.php';

$user_id = $_GET['user_id'];

$sql = "SELECT * FROM notes WHERE user_id='$user_id'";
$stmt = $conn->prepare($sql);
$stmt->execute();

$notes = $stmt->fetchAll(PDO::FETCH_ASSOC);

print_r($notes);
?>
