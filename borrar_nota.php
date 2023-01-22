<?php
include 'conexion.php';

$id = $_GET['id'];

$sql = "DELETE FROM notes WHERE id='$id'";
$conn->exec($sql);

echo "Record deleted successfully";
?>
