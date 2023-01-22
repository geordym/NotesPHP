<?php
include 'conexion.php';

$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];

$sql = "UPDATE notes SET name='$name', description='$description' WHERE id='$id'";
$conn->exec($sql);

echo "Record updated successfully";
?>
