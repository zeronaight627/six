<?php
include 'archivo/DB.php';

// Mostrar errores para depuración
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verificar si se ha subido un archivo
    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        $file_name = $_FILES['file']['name'];
        $file_tmp = $_FILES['file']['tmp_name'];
        $desc = $_POST['desc'];
        $route = 'archivo/imagenes/' . $file_name;

        // Mover el archivo subido al directorio de destino
        if (move_uploaded_file($file_tmp, $route)) {
            // Insertar datos en la base de datos
            $sql = "INSERT INTO archivos (NAME, DESCRIPTION) VALUES ('$file_name', '$desc')";
            if (mysqli_query($conn, $sql)) {
                echo "El archivo se ha subido y los datos se han guardado correctamente.";
            } else {
                echo "Error al guardar los datos en la base de datos: " . mysqli_error($conn);
            }
        } else {
            echo "Error al mover el archivo.";
        }
    } else {
        echo "No se ha subido ningún archivo o ha ocurrido un error.";
    }
} else {
    echo "Método de solicitud no válido.";
}
?>

