<?php
$conexion = new mysqli("bsrr9jt6guiabjmzsvdv-mysql.services.clever-cloud.com", "uv1bual9mrmscam4", "S8H50yIcuGCE4TTkfwyT", "bsrr9jt6guiabjmzsvdv");
$resultado = $conexion->query("SELECT id, nombre FROM archivos");

while ($fila = $resultado->fetch_assoc()) {
    echo "<a href='3.php?id=" . $fila['id'] . "'>" . $fila['nombre'] . "</a><br>";
}
?>

<?php
$conexion = new mysqli("localhost", "usuario", "contraseña", "base_de_datos");

if ($_FILES['archivo']['error'] == UPLOAD_ERR_OK) {
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $contenido = file_get_contents($_FILES['archivo']['tmp_name']);

    $stmt = $conexion->prepare("INSERT INTO archivos (nombre, tipo, contenido) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nombre, $tipo, $contenido);
    $stmt->execute();
    $stmt->close();

    echo "Archivo subido exitosamente.";
} else {
    echo "Error al subir el archivo.";
}
?>

<form action="1.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="archivo" required>
                            <button type="submit">Subir Archivo</button>
                            <script src="2.php"></script>
                        </form>