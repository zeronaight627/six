<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="archivo/img/piz.jpeg">
    <link rel="stylesheet" href="nube.css">
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
                    <h2 class="logo">PAGINA PRINCIPAL<span class="point">.</span></h2>
                </div>
                <div class="links">
                    <a href="aplicaciones.php" class="identificarse">aplicaciones</a>
                    <a href="sistemas.php" class="link">sistemas</a>
                    <a href="comutacion.php" class="datos">comutacion</a>
                    <a href="infraestructura.php" class="link link--active">infraestructura</a>
                </div>
            </div>
        </nav>
        <!-- Sección principal del héroe -->
        <section class="container hero_main">
            <div class="hero_textos">
                <h1 class="title">la mejor experencia <span class="title--active">experiencia digital</span></h1>
                <p class="copy">nos encargamos de llevar tu ideal <span class="copy_active">al siguiente nivel</span></p>
            </div>
            <img src="archivo/img/voom.png" alt="es" class="mockup">
        </section>
    </header>
    <main>
        <!-- Sección de servicios -->
        <section class="services">
            <section class="projects container">

            <section class="testimony">
            <div class="container">
                <h2 class="subtitle">materias<span class="point">.</span></h2>
                <p class="copy_section">tareas</p>
                <div class="testimony-container">
                    <div class="testimony_card">
                        <img src="archivo/img/alberto.jpg" alt="es" class="testimony_img">
                        <div class="testimony_copy">
                            <i class="bx bxl-google"></i>
                            <div class="testimony_info">
                                <h3 class="testimony_name">Aplicaciones Web</h3>
                                <p class="testimony_position"></p>
                            </div>
                        </div>
                    </div>
                    <div class="testimony_card">
                        <img src="archivo/img/jose.jpg" alt="es" class="testimony_img">
                        <div class="testimony_copy">
                            <i class="bx bxl-apple testimony_logo"></i>
                            <div class="testimony_info">
                                <h3 class="testimony_name">Conmutación de Redes de Datos</h3>
                                <p class="testimony_position"></p>
                            </div>
                        </div>
                    </div>
                    <div class="testimony_card">
                        <div class="testimony_text">
                            <img src="archivo/img/lourdes.jpg" alt="er" class="gobierno">
                            <p class="testimony_history">SISTEMAS OPERATIVOS</p>
                        </div>
            </div>
            <div class="testimony_card">
                        <img src="archivo/img/anahi.jpg" alt="es" class="testimony_img">
                        <div class="testimony_copy">
                            <i class="bx bxl-apple testimony_logo"></i>
                            <div class="testimony_info">
                                <h3 class="testimony_name">INFRAESTRUCTURA EN REDES DE DATOS</h3>
                                <p class="testimony_position"></p>
                            </div>
        </section>

                <div class="container-bg">
                    <div class="card">
                        <div class="cards_text">
                            <h3 class="card_title">Universidad Tecnológica de Parral<span class="point">.</span></h3>
                            <p class="card_date">Licenciaturas</p>
                            <p class="card_copy">10</p><br>
                        </div>

                        

                        
                    </div>
                    <link rel="stylesheet" href="archivo/css/carrusel.css">
                    <div class="background"></div>
                    <div class="carousel">
                    <img src="utp.jpeg" alt="escuela" class="active">
                    <img src="archivo/img/aplicacion.jpg" alt="Imagen 2">
                    <img src="archivo/img/conmutacion.jpg" alt="Imagen 3">
                    <img src="archivo/img/infraestructura.jpg" alt="Imagen 4">
                    <img src="archivo/img/Sistemas.jpg" alt="Imagen 5">
                    <div class="carousel-buttons">
                        <button onclick="prevImage()">&#10094;</button>
                        <button onclick="nextImage()">&#10095;</button>
                    </div>
                    <script src="archivo/web.js"></script>
                </div>
            </section>
        </section>
        <!-- Sección de testimonios -->
    </main>
</body>
</html>