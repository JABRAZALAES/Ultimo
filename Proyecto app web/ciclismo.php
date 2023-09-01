<?php
session_start(); // Inicia la sesión

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
    <title>CICLISMO</title>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <script src="JS/jQuery v3.7.0.js"></script> -->
    <!-- <link rel="stylesheet" href="ciclismo\css\bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <style>
        .imagen-agrandable {
            transition: all 0.3s ease;
            cursor: zoom-in;
        }
           /* Cambios en el estilo de la navegación */
           .navbar {
            background-color: black;
        }
        html,nav, .navbar-nav, .navbar-light, .navbar-brand, .navbar-expand-lg .navbar-nav .nav-link, .navbar-light .navbar-nav .nav-link, .navbar-light .navbar-brand, .navbar-toggler-icon, .navbar-toggler,section,footer,.container {
            
          font-family: 'Bebas Neue', sans-serif;
        }

        .navbar-nav .nav-link {
            color: black;
        }
        .btn-yellow {
            background-color: yellow;
            color: black; /* Text color for the button */
        }

        .imagen-agrandable.agrandada {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 9999;
            max-width: 90vw;
            max-height: 90vh;
            cursor: zoom-out;
        }

        .carousel-item img {
            width: 100%;
            height: auto;
            object-fit: contain;
        }

        .caja {
            border: 1px solid #f9f5f5;
            text-align: center;
        }

        .caja>a {
            color: inherit;
            text-decoration: none;
        }

        footer {
            background-color: #090909;
            color: #ffffff;
            padding: 15px 0;
        }

        footer .caja {
            margin-bottom: 15px;
        }

        footer .caja img {
            width: 30px;
            height: 30px;
        }
        .btn-primary{
            background-color: #050505;
            margin: 0%;
          } 
          .caja a img {
            transition: transform 0.3s;
        }

        .caja a img:hover {
            transform: scale(1.2);
        }
    </style>
    <title>Ciclismo</title>
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
                <a class="nav-link" href="footer.php">
                    <h5>Inicío</h5>
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
                <center><a href="formulario.php"><button class="btn btn-primary">Sugerencias</button></a></center>
            </li>
            <br>
            <li class="nav-item ml-2">
                <center><a href="login.php" class="btn btn-yellow">Cerrar Sesión</a></center>
            </li>
           
       
        </ul>
        <div class="navbar-nav ml-auto align-self-center">
            <span class="navbar-text mr-2" style="font-size: 50px;"></span>
            <span class="navbar-text text-yellow" style="font-size: 50px;"><?php echo $_SESSION["username"]; ?></span>
        </div>
    </div>
</nav>


    <div class="row">
        <div class="col">
            <!-- Carrusel -->
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="ciclismo\img\cicli3.jpg" class="d-block w-100" alt="...">

                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="Proyecto app web\ciclismo\img\vuelta.jpg" class="d-block w-100" alt="...">

                    </div>
                    <div class="carousel-item">
                        <img src="Proyecto app web\ciclismo\img\TourdeFrance.jpg" class="d-block w-100" alt="...">

                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <div class="container">
        <br>
        <div class="row justify-content-around">
            <div class="col-4">
                <div class="imge-container">
                    <a href="#seccion1" style="text-decoration: none;
                        color: inherit;">
                        <img src="ciclismo/img\seccion1.webp" alt="imgen" width="90%">
                        <div class="imge-label">
                            <h3>Team DSM en el mercado de velocistas de alto nivel para 2024</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-4">
                <div class="imge-container">
                    <a href="#seccion2" style="text-decoration: none;
                        color: inherit;">
                        <img src="ciclismo/img\seccion2.webp" alt="imgen" width="80%" height="100%">
                        <div class="imge-label" style="text-decoration: none;">
                            <h3>Rukhsar Habibzai - El día que salí de
                                casa</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-4">
                <div class="imge-container">
                    <a href="#seccion3" style="text-decoration: none;
                        color: inherit;">
                        <img src="ciclismo/img\seccion3.webp" alt="imgen" width="100%">
                        <div class="imge-label">
                            <h3>Remco Evenepoel registra 231 km de entrenamiento con 4.335 m de
                                ascenso
                                antes del Tour de Suiza</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <br>
        <h1>Tes Grandes Vueltas del ciclismo</h1>
        <br>
        <div class="row">
            <div class="col">
                <div class="card-group">
                    <div class="card">
                        <img src="ciclismo\img\TourdeFrance.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Tour de Francia</h5>
                            <p class="card-text">Es la carrera más famosa y prestigiosa del ciclismo. Se celebra en
                                Francia durante tres semanas en julio y consta de 21 etapas. El recorrido cambia
                                cada año, pero generalmente incluye montañas, etapas planas y contrarrelojes. El
                                líder de la clasificación general lleva el "Maillot Amarillo" y ha sido ganado por
                                ciclistas legendarios como Eddy Merckx, Bernard Hinault y Lance Armstrong.
                            </p>
                            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                        </div>
                    </div>
                    <div class="card">
                        <img src="ciclismo\img\Giro.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Giro de Italia</h5>
                            <p class="card-text">Es la segunda carrera más importante del ciclismo y se celebra en
                                Italia. También dura tres semanas y consta de 21 etapas. El Giro es conocido por sus
                                rutas montañosas desafiantes y su atmósfera festiva. El líder de la clasificación
                                general lleva la "Maglia Rosa" y ha sido ganado por grandes ciclistas como Fausto
                                Coppi, Eddy Merckx y Chris Froome.
                            </p>
                            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                        </div>
                    </div>
                    <div class="card">
                        <img src="ciclismo\img\vuelta.jpg" class="card-img-top" alt="..." width="100%">
                        <div class="card-body">
                            <h5 class="card-title">Vuelta a España</h5>
                            <p class="card-text">Es la tercera de las Grandes Vueltas y se lleva a cabo en España.
                                Al igual que las otras dos carreras, dura tres semanas y consta de 21 etapas. La
                                Vuelta a España presenta un recorrido variado, que incluye montañas, etapas planas y
                                contrarrelojes. El líder de la clasificación general lleva la "Maillot Roja" y ha
                                sido ganado por ciclistas como Alberto Contador, Chris Froome y Primoz Roglic..</p>
                            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <!-- seccion1 -->
        <section id="seccion1">
            <div class="row">
                <div class="col">
                    <div class="card mb-3" style="max-width: 100%;">
                        <div class="row g-0 align-items-center">
                            <div class="col d-lg-block d-sm-block d-md-none" style="padding-left: 20px;">
                                <img src="ciclismo/img\seccion1.webp" class="img-fluid rounded-start imagen-agrandable"
                                    alt="seecion1" width="100%">
                            </div>
                            <div class="col-md-4 d-lg-none d-none d-md-block ">
                                <div class="col align-items-center">
                                    <img src="ciclismo/img\seccion1.webp"
                                        class="img-fluid rounded-start imagen-agrandable" alt="seecion1" width="900px"
                                        height="190px">

                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Team DSM en el mercado de velocistas de alto nivel para
                                        2024
                                    </h5>
                                    <p class="card-text">El gerente del equipo DSM, Iwan Spekenbrink, ha confirmado
                                        que
                                        está buscando firmar un velocista de alto nivel para la temporada 2024, con
                                        Olav
                                        Kooij y Fabio Jakobsen entre los posibles candidatos.

                                        "Es cierto que actualmente estamos viendo un velocista que pueda lograr
                                        victorias con seguridad", dijo Spekenbrink a De Telegraaf.

                                        "Podemos armar un gran tren de velocidad, pero no tenemos el finalista en
                                        este
                                        momento. Los mejores velocistas también pueden ver que en cada sprint,
                                        nuestros
                                        corredores llevan a nuestros velocistas a donde ellos mismos están o a donde
                                        les
                                        hubiera gustado estar. Es una colaboración que puede aportar mucho a ambas
                                        partes".

                                    </p>
                                    <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- seccion2 -->
        <section id="seccion2">
            <div class="row">
                <div class="col">
                    <div class="card mb-3" style="max-width: 100%;">
                        <div class="row g-0">
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Rukhsar Habibzai - El día que salí de casa</h5>
                                    <p class="card-text">Rukhsar Habibzai es la fundadora del Cheetah Cycling Club y
                                        capitana del primer equipo ciclista femenino de su país, un grupo de
                                        ciclistas
                                        pioneras que fueron nominadas para el Premio Nobel de la Paz en 2016 por su
                                        valentía y coraje al desafiar los tabúes de género en Afganistán.

                                        Nacida en la provincia de Ghazni, Habibzai estaba completando el programa de
                                        odontología en la Universidad Médica Cheragh ubicada en Kabul cuando se vio
                                        obligada a abandonar su país como parte de la evacuación masiva de
                                        ciudadanos
                                        vulnerables que enfrentaban violencia de género selectiva por parte de los
                                        talibanes. Ahora que vive en Virginia, Habibzai es asistente dental y se
                                        unió al
                                        equipo de ciclismo Blue Ridge TWENTY24 de Virginia en 2022.</p>
                                    <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                                </div>
                            </div>
                            <div class="col-md-4">
                                <img src="ciclismo/img\seccion2.webp" class="img-fluid rounded-start imagen-agrandable"
                                    alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    </div>




    <div class="container mt-4">
  <h2 class="text-center mb-3">Comentarios Ciclismo</h2>

  <form id="comentarioFormCiclismo" class="mt-3 p-3 border rounded bg-light">
    <div class="form-group">
      <label for="nombreCiclismo">Nombre:</label>
      <input type="text" id="nombreCiclismo" name="nombreCiclismo" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="comentarioCiclismo">Comentario:</label>
      <textarea id="comentarioCiclismo" name="comentarioCiclismo" rows="4" class="form-control" required></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Enviar Comentario</button>
  </form>

  <div id="comentariosCiclismo" class="mt-4 p-3 border rounded bg-light">
    <?php include 'mostrar_comentarios_ciclismo.php'; ?>
  </div>
</div>



    <!-- Footer -->
    <!-- <div class="row badge-dark"> -->
    <footer class="mt-2">
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
    <!-- </div> -->

    <!-- Scripts de Bootstrap y jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            // Función hover para la clase "imge-container"
            $('.imge-container').hover(
                function () {
                    $(this).find('img').css('transform', 'scale(1.1)');
                    $(this).find('img').css('box-shadow', '0 0 10px rgba(0, 0, 0, 0.5)');
                },
                function () {
                    $(this).find('img').css('transform', 'scale(1)');
                    $(this).find('img').css('box-shadow', 'none');
                }
            );
        });

        $(document).ready(function () {
            $('#carouselExampleDark').carousel(); // Inicializar el carrusel

            // Controlar el desplazamiento del carrusel al hacer clic en los botones previo/siguiente
            $('.carousel-control-prev').click(function () {
                $('#carouselExampleDark').carousel('prev');
            });

            $('.carousel-control-next').click(function () {
                $('#carouselExampleDark').carousel('next');
            });
        });

        $(document).ready(function () {
            $('#imagenPrincipal').click(function () {
                $(this).toggleClass('agrandada');
            });
        });
        $(document).ready(function () {
            $('.imagen-agrandable').click(function () {
                $(this).toggleClass('agrandada');
            });
        });
        $(document).ready(function() {
        $('.caja img').on('mouseenter', function() {
          $(this).css('transform', 'scale(1.1)');
        });

        $('.caja img').on('mouseleave', function() {
          $(this).css('transform', '');
        });
      });
    </script>
   <script>
  $(document).ready(function() {
    $("#comentarioFormCiclismo").submit(function(event) {
      event.preventDefault();

      var nombreCiclismo = $("#nombreCiclismo").val();
      var comentarioCiclismo = $("#comentarioCiclismo").val();

      $.ajax({
        type: "POST",
        url: "guardar_comentario_ciclismo.php",
        data: { nombreCiclismo: nombreCiclismo, comentarioCiclismo: comentarioCiclismo },
        success: function() {
          $("#nombreCiclismo").val("");
          $("#comentarioCiclismo").val("");
          $("#comentariosCiclismo").load("mostrar_comentarios_ciclismo.php");
        }
      });
    });
  });
</script>
</body>

</html>