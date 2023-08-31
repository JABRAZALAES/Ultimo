<?php
session_start(); // Inicia la sesión

if (!isset($_SESSION["username"])) {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <style>
        .caja {
            border: 1px solid #ffffff;
            text-align: center;
        }
        html,nav, .navbar-nav, .navbar-light, .navbar-brand, .navbar-expand-lg .navbar-nav .nav-link, .navbar-light .navbar-nav .nav-link, .navbar-light .navbar-brand, .navbar-toggler-icon, .navbar-toggler,section,footer,.container {
            
            font-family: 'Bebas Neue', sans-serif;
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
            border-radius: 10px;
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


   
    </style>
</head>

<body style="background-color: #e2dbdb;">
<nav class="navbar navbar-expand-lg navbar-dark badge-dark">
    <a class="navbar-brand" href="#"><img src="FOOTER/img/logo_white_large.png" width="300px" height="120px" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="footer.html">
                    <h5>Inicío</h5>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="UFC.html">
                    <h5>UFC</h5>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Futbol.html">
                    <h5>Fútbol</h5>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Basquet.html">
                    <h5>Básquet</h5>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ciclismo.html">
                    <h5>Ciclismo</h5>
                </a>
            </li>
            <li class="nav-item ml-2">
                <center><a href="formulario.html"><button class="btn btn-primary">Sugerencias</button></a></center>
            </li>
            <br>
            <li class="nav-item ml-2">
                <center><a href="login.php" class="btn btn-yellow">Iniciar Sesión</a></center>
            </li>
        </ul>
        <div class="navbar-nav ml-auto align-self-center">
            <span class="navbar-text mr-2" style="font-size: 50px;">Bienvenido,</span>
            <span class="navbar-text text-yellow" style="font-size: 50px;"><?php echo $_SESSION["username"]; ?></span>
        </div>
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
        <h2 class="section-title">¿Quienes somos?
        </h2>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-6">
                <div class="cuadro">
                    <a href="Futbol.html"><img src="FOOTER/img/futbol.jpg" alt="Descripción de la imagen"
                            class="img-fluid w-100"></a>
                </div>
                <div class="cuadro">
                    <a href="Basquet.html"><img src="FOOTER/img/Basquet.webp" alt="Descripción de la imagen"
                            class="img-fluid w-100"></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="cuadro">
                    <a href="ciclismo.html"><img src="FOOTER/img/—Pngtree—logo bike cycling mtb isolated_5209109.png"
                            alt="Descripción de la imagen" class="img-fluid w-100"></a>
                </div>
                <div class="cuadro">
                    <a href="UFC.html"><img src="FOOTER/img/ufc.png" alt="Descripción de la imagen"
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
                        <a href="#"><img src="FOOTER/img/ufc.png" alt="Descripción de la imagen" width="50%"
                                height="50%"></a>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <footer class="mt-2">
        <div class="row justify-content-around mt-3">
            <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                <div class="caja m-2">
                    <a href="#"><img src="FOOTER/img/facebook.png" width="30px" height="30px"></a>
                    <a href="#">
                        <p>Facebook</p>
                    </a>
                    <p>@Sport360</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                <div class="caja m-2">
                    <a href="#"><img src="FOOTER/img/instagram.png" width="30px" height="30px"></a>
                    <a href="#">
                        <p>Instagram</p>
                    </a>
                    <p>@Sport360</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                <div class="caja m-2">
                    <a href="#"><img src="FOOTER/img/signo-de-twitter.png" width="30px" height="30px"></a>
                    <a href="#">
                        <p>Twitter</p>
                    </a>
                    <p>@Sport360</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                <div class="caja m-2">
                    <a href="#"><img src="FOOTER/img/tik-tok.png" width="30px" height="30px"></a>
                    <a href="#">
                        <p>TikTok</p>
                    </a>
                    <p>@Sport360</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                <div class="caja m-2">
                    <a href="#"><img src="FOOTER/img/youtube.png" width="30px" height="30px"></a>
                    <a href="#">
                        <p>YouTube</p>
                    </a>
                    <p>@Sport360</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                <div class="caja m-2">
                    <a href="#"><img src="FOOTER/img/tumblr-logo.png" width="30px" height="30px"></a>
                    <a href="#">
                        <p>Tumblr</p>
                    </a>
                    <p>@Sport360</p>
                </div>
            </div>
        </div>
        <hr>
        <div class="col-lg-12 col-md-12 col-sm-12" style="text-align: center;">
            <p>© 2023 Sport360. Todos los derechos reservados.</p>
            <p>Grupo X</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>