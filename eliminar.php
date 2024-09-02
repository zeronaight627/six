<?php
include('archivo/DB.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $consulta = "DELETE FROM archivos WHERE id = $id";
    if (mysqli_query($conn, $consulta)) {
        echo "Archivo eliminado correctamente.";
    } else {
        echo "Error al eliminar el archivo: " . mysqli_error($conn);
    }
}
?>
