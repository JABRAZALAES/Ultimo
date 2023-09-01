<?php
session_start(); // Inicia la sesión

// Verificar si el usuario ha iniciado sesión
if (isset($_SESSION["username"])) {
    $isLoggedIn = true;
    $username = $_SESSION["username"];
} else {
    $isLoggedIn = false;
}

if (isset($_POST["logout"])) {
    // Cerrar sesión si se ha enviado el formulario de cierre de sesión
    session_destroy();
    header("Location: login.php");
    exit();
}
?>      
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.google.com/specimen/Kanit" rel="stylesheet">
    <style>
 .container2 {
            display: flex;
            flex-direction: row;
            align-items: center;
            margin: 20px;
        }

        .image {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            margin-right: 20px;
        }

        .description {
            flex: 1;
        }

        /* Estilos alternos para cambiar el orden de imagen y descripción */
        .container2:nth-child(even) .image,
        .container2:nth-child(odd) .description {
            order: 2;
        }

        .container2:nth-child(even) .description,
        .container2:nth-child(odd) .image {
            order: 1;
        }
        .caja {
            border: 1px solid #ffffff;
            text-align: center;
        }
        html,nav, .navbar-nav, .navbar-light, .navbar-brand, .navbar-expand-lg .navbar-nav .nav-link, .navbar-light .navbar-nav .nav-link, .navbar-light .navbar-brand, .navbar-toggler-icon, .navbar-toggler,section,footer,.container {
            
            font-family: 'Kanit', sans-serif;
          }

        .caja>a {
            color: inherit;
            text-decoration: none;
        }

        footer {
            background-color: #050505;
            color: #ffffff;
            padding: 15px 0;
        }

        /* Estilos para el carrusel */
        .carousel {
            border: 2px solid rgb(248, 228, 7);
            border-radius: 10px;
            overflow: hidden;
        }

        .carousel-inner {
            border-radius: 10px;
        }

        .carousel-item img {
            width: 100%;
            height: 700px; /* Set the desired height for the carousel images */
            object-fit: cover; /* Preserve aspect ratio and cover entire container */
        }

        .cuadro img {
            border-radius: 100px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        .cuadro img:hover {
            transform: scale(1.05);
        }

        /* Cambios en el estilo de la navegación */
        .navbar {
            background-color: black;
        }

        .navbar-nav .nav-link {
            color: black;
        }
        .btn-yellow {
            background-color: yellow;
            color: black; /* Text color for the button */
        }
          /* Estilos adicionales para la responsividad */
          @media (max-width: 768px) {
            .carousel-item img {
                height: 300px; /* Ajustar la altura de las imágenes para dispositivos pequeños */
            }
        }
        .btn-primary{
            background-color: #050505;
            margin: 0%;
          
     

        }

        .cuadro {
            margin-bottom: 20px;
        }
         /* Estilos para el título "NUESTRAS SECCIONES" */
         .section-title {
            font-size: 52px;
            color: #000000;
            text-shadow: 2px 2px yellow;
            text-align: center;
            margin-top: 20px;
            margin-bottom: 40px;
            font-family:'Bebas Neue', sans-serif;
        }
        .scrolling-text-container{
            font-family: 'Bebas Neue', sans-serif;
            font-size: 32px;
            margin: 2px;
            margin-top: 2px;
        }
        .caja a img {
            transition: transform 0.3s;
        }

        .caja a img:hover {
            transform: scale(1.2);
        }
        .quienessomos{
            font-family: 'Kanit', sans-serif;
            font-size: 40px;
        }
        .navbar-left {
            justify-content: flex-start;
        }


    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark badge-dark ">

<nav class="navbar navbar-expand-lg navbar-dark badge-dark">

        <a class="navbar-brand" href="#"><img src="FOOTER/img/logo_white_large.png" width="300px" height="120px" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end align-items-" id="navbarNav">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link" href="footer.php">
                        <h5>Inicio</h5>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="UFC.php">
                        <h5>UFC</h5>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Futbol.php">
                        <h5>Fútbol</h5>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Basquet.php">
                        <h5>Básquet</h5>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ciclismo.php">
                        <h5>Ciclismo</h5>
                    </a>
                </li>
                <li class="nav-item ml-2">
                    <?php if ($isLoggedIn) { ?>
                    <form method="POST">
                        <button type="submit" class="btn btn-yellow" name="logout">Cerrar Sesión</button>
                    </form>
                    <?php } else { ?>
                    <a href="login.php" class="btn btn-primary">Iniciar Sesión</a>
                    <?php } ?>
                </li>
                <li class="nav-item ml-2">
                    <?php if ($isLoggedIn) { ?>
                    <span class="navbar-text text-yellow" style="font-size: 50px;"><?php echo $username; ?></span>
                    <?php } ?>
                </li>
            </ul>
        </div>
    </nav>

    <div class="scrolling-text-container">
        <marquee behavior="scroll" direction="left">
            <p>Las mejores noticias deportivas las encuentras aquí!</p>
        </marquee>
    </div>

    <div class="container-fluid p-0">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="FOOTER\futbol inicio.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="FOOTER/basketball-5110521_1280.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="FOOTER/ai-generated-7959712_1280.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="FOOTER/img/ufc.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </div>

    <div class="container">
        <h2 class="section-title">Nuestras secciones
        </h2>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-6">
                <div class="cuadro">
                    <a href="Futbol.php"><img src="FOOTER/img/futbol.jpg" alt="Descripción de la imagen"
                            class="img-fluid w-100"></a>
                </div>
                <div class="cuadro">
                    <a href="Basquet.php"><img src="FOOTER/img/Basquet.webp" alt="Descripción de la imagen"
                            class="img-fluid w-100"></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="cuadro">
                    <a href="ciclismo.php"><img src="FOOTER/img/—Pngtree—logo bike cycling mtb isolated_5209109.png"
                            alt="Descripción de la imagen" class="img-fluid w-100"></a>
                </div>
                <div class="cuadro">
                    <a href="UFC.php"><img src="FOOTER/img/ufc.png" alt="Descripción de la imagen"
                            class="img-fluid w-100"></a>
                </div>
            </div>
        </div>
    </div>
            <div class="col-sm-12 col-12 d-sm-block d-lg-none d-md-none mt-4">
                <div class="cuadro">
                    <center>
                        <a href="#"><img src="FOOTER/img/futbol.jpg" alt="Descripción de la imagen" width="50%"
                                height="50%"></a>
                    </center>
                </div>
            </div>
            <div class="col-sm-12 col-12 d-sm-block d-lg-none d-md-none mt-4">
                <div class="cuadro">
                    <center>
                        <a href="#"><img src="FOOTER/img/—Pngtree—logo bike cycling mtb isolated_5209109.png"
                                alt="Descripción de la imagen" width="50%" height="50%"></a>
                    </center>
                </div>
            </div>
            <div class="col-sm-12 col-12 d-sm-block d-lg-none d-md-none mt-4">
                <div class="cuadro">
                    <center>
                        <a href="#"><img src="FOOTER/img/Basquet.webp" alt="Descripción de la imagen" width="50%"
                                height="50%"></a>
                    </center>
                </div>
            </div>
            <div class="col-sm-12 col-12 d-sm-block d-lg-none d-md-none mt-4">
                <div class="cuadro">
                    <center>
<<<<<<< Updated upstream
                        <a href="#"><img src="FOOTER/ufc.jpg" alt="Descripción de la imagen" width="50%"
=======
                        <a href="#"><img src="" alt="Descripción de la imagen" width="50%"
>>>>>>> Stashed changes
                                height="50%"></a>
                    </center>
                </div>
            </div>
        </div>
        <div class="container">
    <h2 class="section-title text-center">¿Quiénes somos?</h2>
    <p class="text-center font-weight-bold">
        ¡Bienvenidos a MutantesSport! Somos un equipo de apasionados por los deportes que ha reunido sus superpoderes
        para brindarte las últimas noticias y análisis en el mundo del deporte. Nuestra historia comenzó cuando cuatro
        amigos decidieron unir sus fuerzas y conocimientos para crear un espacio en línea donde los amantes del fútbol,
        baloncesto, UFC y ciclismo pudieran encontrar todo lo que necesitan saber.
    </p>
    <h3 class="section-title text-center mt-4">Conoce a los mutantes</h3>

    <div class="row mt-4">
        <div class="col-md-6 col-lg-3">
            <div class="border border-dark rounded p-3 d-flex flex-column align-items-center" style="height: 100%; border-radius: 15px;">
                <img src="img/foto.png" alt="Imagen 1" class="image img-fluid rounded-circle">
                <h4 class="mt-3 text-center">Josue Espinoza</h4>
                <p class="font-weight-bold text-center">
                    Su pasión por el fútbol y su habilidad para analizar los juegos desde un punto de vista estratégico
                    lo convierten en nuestro experto en tácticas y estrategias. No hay partido que se le escape.
                </p>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="border border-dark rounded p-3 d-flex flex-column align-items-center" style="height: 100%; border-radius: 100px;">
                <img src="img/chango.jpg" alt="Imagen 2" class="image img-fluid rounded-circle">
                <h4 class="mt-3 text-center">Andrés Brazales</h4>
                <p class="font-weight-bold text-center">
                    ¿Te apasiona la UFC? Andrés es nuestro gurú de las artes marciales mixtas.
                    Su conocimiento profundo del octágono y su habilidad para desglosar las peleas más emocionantes nos permiten brindarte los análisis más completos y emocionantes.
                </p>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="border border-dark rounded p-3 d-flex flex-column align-items-center" style="height: 100%; border-radius: 15px;">
                <img src="img/raul.jpeg" alt="Imagen 3" class="image img-fluid rounded-circle">
                <h4 class="mt-3 text-center">Raúl Faz</h4>
                <p class="font-weight-bold text-center">
                    La pasión de Raúl por el ciclismo no tiene límites. Desde las carreras de ruta hasta el ciclismo de montaña, Ladino sigue cada pedalada con entusiasmo.
                    Sus comentarios expertos sobre el mundo del ciclismo te mantendrán al tanto de las últimas competencias y tendencias.
                </p>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="border border-dark rounded p-3 d-flex flex-column align-items-center" style="height: 100%; border-radius: 15px;">
                <img src="img/Nicolas.jpeg" alt="Imagen 4" class="image img-fluid rounded-circle">
                <h4 class="mt-3 text-center">Nicolás Lara</h4>
                <p class="font-weight-bold text-center">
                    El baloncesto corre por las venas de Nicolás. Con su habilidad para encontrar los aspectos más destacados y momentos cruciales en cada juego, se ha convertido en nuestra fuente confiable para todo lo relacionado con la canasta. Siempre está listo para celebrar un triple espectacular.
                </p>
            </div>
        </div>
    </div>

    <p class="text-center font-weight-bold mt-4">
        En MutantesSport, nuestra misión es llevarte más allá de los titulares y
        brindarte una perspectiva única de cada deporte. Estamos aquí para mantenerte informado,
        entretenido y conectado con la emoción de los deportes que amamos. ¡Acompáñanos en esta aventura deportiva!
    </p>
</div>

   






    <footer class="mt-2 col-lg-12">
        <div class="row justify-content-around mt-3">
            <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                <div class="caja m-2">

                    <a href="#"><img src="FOOTER/img/facebook.png" width="30px" height="30px" style="margin-top: 20px;"></a>
                    <a href="#">
                        <p>Facebook</p>
                    </a>
                    <p>@MutanteSport</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                <div class="caja m-2">
                    <a href="#"><img src="FOOTER/img/instagram.png" width="30px" height="30px" style="margin-top: 20px;"></a>
                    <a href="#">
                        <p>Instagram</p>
                    </a>
                    <p>@MutanteSport</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                <div class="caja m-2">
                    <a href="#"><img src="FOOTER/img/signo-de-twitter.png" width="30px" height="30px" style="margin-top: 20px;"></a>
                    <a href="#">
                        <p>Twitter</p>
                    </a>
                    <p>@MutanteSport</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                <div class="caja m-2">
                    <a href="#"><img src="FOOTER/img/tik-tok.png" width="30px" height="30px" style="margin-top: 20px;"></a>
                    <a href="#">
                        <p>TikTok</p>
                    </a>
                    <p>@MutanteSport</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                <div class="caja m-2">
                    <a href="#"><img src="FOOTER/img/youtube.png" width="30px" height="30px" style="margin-top: 20px;"></a>
                    <a href="#">
                        <p>YouTube</p>
                    </a>
                    <p>@MutanteSport</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                <div class="caja m-2">
                    <a href="#"><img src="FOOTER/img/tumblr-logo.png" width="30px" height="30px" style="margin-top: 20px;"></a>
                    <a href="#">
                        <p>Tumblr</p>
                    </a>
                    <p>@MutanteSport</p>
                </div>
            </div>
        </div>
        <hr>
        <div class="col-lg-12 col-md-12 col-sm-12" style="text-align: center;">
            <p>© 2023 MutanteSport. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
     const isLoggedIn = <?php echo json_encode($isLoggedIn); ?>;

// Obtener la barra de navegación
const navbar = document.querySelector('.navbar');

// Agregar la clase 'navbar-left' si el usuario ha iniciado sesión
if (isLoggedIn) {
    navbar.classList.add('navbar-left');
}
    </script>
</body>

</html>
