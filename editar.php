<?php
include('archivo/DB.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $consulta = "SELECT * FROM archivos WHERE id = $id";
    $resultado = mysqli_query($conn, $consulta);
    if ($resultado) {
        $row = $resultado->fetch_array();
        $name = $row['NAME'];
        $descri = $row['DESCRIPTION'];
    }
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $descri = $_POST['descri'];

    $consulta = "UPDATE archivos SET NAME = '$name', DESCRIPTION = '$descri' WHERE id = $id";
    if (mysqli_query($conn, $consulta)) {
        echo "Archivo actualizado correctamente.";
    } else {
        echo "Error al actualizar el archivo: " . mysqli_error($conn);
    }
}
?>

<form method="POST" action="editar.php">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <label for="name">Nombre:</label>
    <input type="text" name="name" value="<?php echo $name; ?>">
    <label for="descri">Descripción:</label>
    <input type="text" name="descri" value="<?php echo $descri; ?>">
    <button type="submit" name="update">Actualizar</button>
</form>
