<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="archivo/img/piz.jpeg">
    <link rel="stylesheet" href="archivo/css/registro.css">
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
                    <h2 class="logo">Registro<span class="point">.</span></h2>
                </div>
                <div class="links">
                    <a href="nnube.html" class="identificarse">Regresar</a>
                </div>
            </div>
        </nav>
        <!-- Sección principal del héroe -->
        <section class="container hero_main">
            <div class="hero_textos">
                <h1 class="title">la mejor experencia <span class="title--active">experiencia digital</span></h1>
                <p class="copy">nos encargamos de llevar tu ideal <span class="copy_active">al siguiente nivel</span></p>
                <a href="login.php" class="cta">Login</a>
            </div>
            <img src="archivo/img/voom.png" alt="es" class="mockup">
        </section>
    </header>
    <main>
        <!-- info -->
        <section class="services">
            <section class="projects container">
                <h2 class="subtitle">registrate <span class="point">y</span></h2>
                <p class="copy_section">unete a mejorar con nosotros </p>
                <div class="container-bg">
                    <div class="card">
                        <div class="cards_text">
                            <h3 class="card_title">Universidad Tecnológica de Parral<span class="point">.</span></h3>
                            <p class="card_date">Licenciaturas</p>
                            <p class="card_copy">10</p><br>
                        </div>

                        <!--registro-->
                        <form role="form" name="registro" action="archivo/registro.php" method="post">
                            <div class="form-group">
                              <label for="username">Nombre de usuario</label>
                              <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario">
                            </div>
                            <div class="form-group">
                              <label for="fullname">Nombre Completo</label>
                              <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Nombre Completo">
                            </div>
                            <div class="form-group">
                              <label for="email">Correo Electronico</label>
                              <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electronico">
                            </div>
                            <div class="form-group">
                              <label for="password">Contrase&ntilde;a</label>
                              <input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a">
                            </div>
                            <div class="form-group">
                              <label for="confirm_password">Confirmar Contrase&ntilde;a</label>
                              <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirmar Contrase&ntilde;a">
                            </div>
                  
                            <button type="submit" class="btn btn-default">Registrar</button>
                          </form>
                          <script src="archivo/valida_registro.js"></script>

                        
                    </div>
                    <div class="background"></div>
                    <img src="utp.jpeg" alt="escuela" class="background_img">
                    <div class="background_text">
                        <h3 class="background_title">la educación en línea</h3>
                        <p class="background_copy">una de las mejores opciones <br> más<br> por los que trabajan</p>
                    </div>
                </div>
            </section>
        </section>
        <!-- Sección de testimonios -->
    </main>
</body>
</html>