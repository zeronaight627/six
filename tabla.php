<?php
$inc =include('archivo/DB.php');
if ($inc){
    echo '<div class="container">';
    $consulta = "SELECT * FROM archivos";
    $resultado = mysqli_query($conn, $consulta);
    if ($resultado) {
        while($row = $resultado->fetch_array()){
            $id = $row['id'];
            $name = $row['NAME'];
            $descri = $row['DESCRIPTION'];
            ?>
            <div class="card">
                <h2><?php echo $name; ?></h2>
            <div class="card-content">
            <p>
                <b>ID:</b> <?php echo $id; ?><br>
                <b>Archivo: <b> <?php echo $name; ?><br>
                <b>Descri: </b> <?php echo $descri; ?><br>
            </p>
            </div>
        </div>
        <?php
        }
        echo '</div>';
    }
}

?>