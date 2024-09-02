<?php
$host = "bsrr9jt6guiabjmzsvdv-mysql.services.clever-cloud.com";
$user = "uv1bual9mrmscam4";
$password = "S8H50yIcuGCE4TTkfwyT";
$db = "bsrr9jt6guiabjmzsvdv";

$conn = new mysqli($host, $user, $password, $db);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

?>
