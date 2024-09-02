<?php
include 'archivo/DB.php';

// Mostrar errores para depuración
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $file_name = $_POST['file'];
    $file_path = 'archivo/imagenes/' . $file_name;

    if (file_exists($file_path)) {
        // Modificar el archivo (por ejemplo, añadir una línea de texto)
        $content = file_get_contents($file_path);
        $content .= "\nModificado el " . date('Y-m-d H:i:s');
        file_put_contents($file_path, $content);

        // Forzar la descarga del archivo
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($file_path) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file_path));
        readfile($file_path);
        exit;
    } else {
        echo "El archivo no existe.";
    }
} else {
    echo "Método de solicitud no válido.";
}
?>
