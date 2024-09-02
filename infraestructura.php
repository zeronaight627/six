<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="archivo/img/piz.jpeg">
    <link rel="stylesheet" href="archivo/css/infraestructura.css">
    <link rel="stylesheet" href="archivo/css/cop.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VOOM</title>
</head>
<body>
    <!-- Encabezado principal -->
    <header class="hero">
        <nav class="nav_hero">
            <div class="container nav_container">
                <div class="logo">
                    <h2 class="logo">INFRAESTRUCTURA EN REDES DE DATOS<span class="point"></span></h2>
                </div>
                <div class="links">
                    <a href="nube.php" class="identificarse">inicio</a>
                    <a href="comutacion.php" class="link">comutacion</a>
                    <a href="aplicaciones.php" class="datos">aplicaciones</a>
                    <a href="sistemas.php" class="link link--active">sistemas</a>
                </div>
            </div>
        </nav>
        <!-- Sección principal del héroe -->
        <section class="container hero_main">
            <div class="hero_textos">
                <h1 class="title">la mejor experencia <span class="title--active">experiencia digital</span></h1>
                <p class="copy">nos encargamos de llevar tu ideal <span class="copy_active">al siguiente nivel</span></p>
                <a href="nube.php" class="card_button">Inicio</a>
            </div>
            <img src="archivo/img/voom.png" alt="es" class="mockup">
        </section>
    </header>
    <main>
        <!-- Sección de servicios -->
        <section class="services">
            <section class="projects container">
                <h2 class="subtitle">Judith Anahi Felix Felix <br><span class="point">Ofrece</span></h2>
                <p class="copy_section">conjunto de elementos físicos y lógicos que permiten la comunicación entre los diferentes dispositivos de una organización. </p>
                <p class="copy_section">servidores </p>
                <p class="copy_section">routers </p>
                <p class="copy_section">switches </p>
                <p class="copy_section">cables </p>
                <p class="copy_section">firewalls  </p>
                <p class="copy_section"> intercambio de datos  </p>
                <div class="container-bg">
                    <div class="card">
                        <div class="cards_text">
                            <h3 class="card_title">Trabajos<span class="point">.</span></h3>
                            <a href="nube.php" class="card_button">Plan de estudios</a>
                        </div>

                        <!--descarga de word y pdf-->
                        <div class="desca">
                            <form action="upload.php" method="POST" enctype="multipart/form-data">
                                <input type="file" name="file" required>
                                <input type="text" name="desc" placeholder="Descripción" required>
                                <input type="submit" value="Subir">
                            </form>
                        </div>
                        <!--archivo descarga -->
                        <form action="download.php" method="POST">
                        <label for="file">Selecciona el archivo a descargar:</label>
                        <select name="file" id="file">
                        <?php
                        // Conectar a la base de datos y obtener la lista de archivos
                        include 'archivo/DB.php';
                        $sql = "SELECT name FROM archivos";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";}
                        ?>
                        </select>
                        <input type="submit" value="Descargar">
                        </form>
                        <!--modificador-->
                        <fieldset>
                        <?php
                        $inc = include('archivo/DB.php');
                        if ($inc) {
                        echo '<div class="container">';
                        $consulta = "SELECT * FROM archivos";
                        $resultado = mysqli_query($conn, $consulta);
                        if ($resultado) {
                        while ($row = $resultado->fetch_array()) {
                        $id = $row['id'];
                        $name = $row['NAME'];
                        $descri = $row['DESCRIPTION'];
                        ?>
                        <div class="card">
                        <h2><?php echo $name; ?></h2>
                        <div class="card-content">
                        <p>
                            <b>ID:</b> <?php echo $id; ?><br>
                            <b>Archivo:</b> <?php echo $name; ?><br>
                            <b>Descri:</b> <?php echo $descri; ?><br>
                        </p>
                        <a href="editar.php?id=<?php echo $id; ?>" class="btn btn-primary">Editar</a>
                        <a href="eliminar.php?id=<?php echo $id; ?>" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este archivo?');">Eliminar</a>
                    </div>
                </div>
                <?php
            }
            echo '</div>';
        }
    }
    ?>
</fieldset>

                        
                    </div>
                    <div class="background"></div>
                    <img src="archivo/img/infraestructura.jpg" alt="escuela" class="background_img">
                    <div class="background_text">
                        <h3 class="background_title">Contacto del profesor</h3>
                        <p class="background_copy">+52 627 143 0727 <br> no-reply@classroom.google.com<br></p>
                    </div>
                </div>
            </section>
        </section>
        <!-- Sección de testimonios -->
    </main>
</body>
</html>