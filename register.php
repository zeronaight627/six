<?php

if (!empty($_POST)) {
    if (isset($_POST["username"]) && isset($_POST["fullname"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["confirm_password"])) {
        if ($_POST["username"] != "" && $_POST["fullname"] != "" && $_POST["email"] != "" && $_POST["password"] != "" && $_POST["password"] == $_POST["confirm_password"]) {
            
            include "archivo/DB.php";
            
            $found = false;
            $username = $_POST["username"];
            $fullname = $_POST["fullname"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            
            // Verificar si el usuario o el email ya están registrados
            $stmt = $conn->prepare("SELECT * FROM user WHERE username = ? OR email = ?");
            $stmt->bind_param("ss", $username, $email);
            $stmt->execute();
            $result = $stmt->get_result();
            
            while ($r = $result->fetch_array()) {
                $found = true;
                break;
            }
            
            if ($found) {
                print "<script>alert(\"Nombre de usuario o email ya están registrados.\");window.location='../registro.php';</script>";
            } else {
                // Encriptar la contraseña
                $hashed_password = password_hash($password, PASSWORD_BCRYPT);
                
                // Insertar el nuevo usuario en la base de datos
                $stmt = $conn->prepare("INSERT INTO user (username, fullname, email, password, created_at) VALUES (?, ?, ?, ?, NOW())");
                $stmt->bind_param("ssss", $username, $fullname, $email, $hashed_password);
                
                if ($stmt->execute()) {
                    print "<script>alert(\"Registro exitoso. Proceda a logearse\");window.location='../login.php';</script>";
                } else {
                    print "<script>alert(\"Error en el registro. Inténtelo de nuevo.\");window.location='../registro.php';</script>";
                }
                
                $stmt->close();
            }
        }
    }
}

?>


