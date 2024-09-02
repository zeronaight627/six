<?php
$conexion = new mysqli("bsrr9jt6guiabjmzsvdv-mysql.services.clever-cloud.com", "uv1bual9mrmscam4", "S8H50yIcuGCE4TTkfwyT", "bsrr9jt6guiabjmzsvdv");

$id = $_GET['id'];
$stmt = $conexion->prepare("SELECT nombre, tipo, contenido FROM archivos WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->bind_result($nombre, $tipo, $contenido);
$stmt->fetch();
$stmt->close();

header("Content-Disposition: attachment; filename=" . $nombre);
header("Content-Type: " . $tipo);
echo $contenido;
?>
