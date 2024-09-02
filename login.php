<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
	<link rel="shortcut icon" href="archivo/img/piz.jpeg">
    <link rel="stylesheet" href="archivo/css/login.css">
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
                    <h2 class="logo">Login<span class="point">.</span></h2>
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
                <a href="registro.php" class="cta">Registro</a>
            </div>
            <img src="archivo/img/voom.png" alt="es" class="mockup">
        </section>
    </header>
    <main>
        <!-- Sección de servicios -->
        <section class="services">
            <section class="projects container">
                <h2 class="subtitle">Bienvenido<span class="point"> comenzemos</span></h2>
                <p class="copy_section">a demostrar lo mejor de nosotros </p>
                <div class="container-bg">
                    <div class="card">
                        <div class="cards_text">
                            <h3 class="card_title">Universidad Tecnológica de Parral<span class="point">.</span></h3>
                            <p class="card_date">Licenciaturas</p>
                            <p class="card_copy">10</p><br>
                        </div>

                        <!--login-->
                        <form role="form" name="login" action="archivo/login.php" method="post">
		  <div class="form-group">
		    <label for="username">Nombre de usuario o email</label>
		    <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario">
		  </div>
		  <div class="form-group">
		    <label for="password">Contrase&ntilde;a</label>
		    <input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a">
		  </div>
		  <button type="submit" class="btn btn-default">Acceder</button>
		</form>
		<script src="archivo/valida_login.js"></script>

                        
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