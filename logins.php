<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "archivo/DB.php";
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Preparar y ejecutar la consulta
    $stmt = $conn->prepare("SELECT * FROM user WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        // Verificar la contraseña
        if (password_verify($password, $user['password'])) {
            // Iniciar sesión
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header("Location: nube.php");
            exit();
        } else {
            echo "<script>alert('Contraseña incorrecta');window.location='login.php';</script>";
        }
    } else {
        echo "<script>alert('Nombre de usuario no encontrado');window.location='login.php';</script>";
    }
    
    $stmt->close();
    $conn->close();
}
?>

