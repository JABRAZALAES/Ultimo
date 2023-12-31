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
    <link href="https://fonts.google.com/specimen/Kanit" rel="stylesheet">

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
            
          font-family: 'Kanit', sans-serif;
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
        .carousel-item img {
    height: 100vh; /* Establece la altura al 100% de la altura visible de la pantalla */
    object-fit: cover; /* Escala la imagen para cubrir todo el espacio disponible */
    width: 100%; /* Asegura que la imagen ocupe todo el ancho del contenedor */
  }

  /*/////////////////////////////////////////*/
  #menuContainer {
            position: fixed;
            right: -300px; /* Colocar el menú fuera de la pantalla inicialmente */
            top: 0;
            width: 300px;
            height: 100%;
            background-color: #FBF6B8; /* Amarillo claro */
            color: black;
            border-left: 2px solid #000; /* Borde izquierdo oscuro */
            transition: right 0.3s; /* Transición para suavizar la animación */
            z-index: 999; /* Asegura que el menú esté en la parte superior */
        }

        #menuContent {
            padding: 20px;
        }

        #menuButton {
            position: fixed;
            right: 0;
            top: 50%; /* Coloca el botón en la mitad de la pantalla verticalmente */
            transform: translateY(-50%); /* Centra verticalmente */
            padding: 10px;
            background-color: #007BFF;
            color: white;
            cursor: pointer;
        }

        /* Estilo para la pestaña "Calendario" */
        #calendarTab {
            position: fixed;
            right: -40px; /* Coloca la pestaña fuera de la pantalla inicialmente */
            top: 50%; /* Coloca la pestaña en la mitad de la pantalla verticalmente */
            transform: translateY(-50%) rotate(-90deg); /* Rotación del texto */
            background-color: #FFFF99;
            color: black;
            padding: 10px 15px;
            cursor: pointer;
            z-index: 1000; /* Asegura que la pestaña esté en la parte superior */
            white-space: nowrap; /* Evita el ajuste automático del texto */
        }

        /* Estilo para resaltar las fechas marcadas */
        .marked-date {
            background-color: #FFD700; /* Color de fondo amarillo para resaltar */
            color: black;
            font-weight: bold;
        }

        /* Estilo para los títulos de las fechas marcadas */
        .marked-title {
            background-color: #FFA07A; /* Color de fondo melocotón */
            color: black;
            font-weight: bold;
            padding: 5px;
            margin-top: 10px;
        }
        /******************************* */
        .recuadro {
  background-color: #F3BD50; /* Color claro de fondo */
  border: 2px solid #333; /* Bordes oscuros */
  padding: 10px; /* Espaciado interior */
  border-radius: 10px; /* Bordes redondos */
  transition: transform 0.2s; /* Transición para el efecto hover */
  margin: 2px; /* Margen de 2px */
  color: blue; /* Color de las letras azul */
  font-family: Arial, sans-serif; /* Tipo de letra alternativo */
}


  .recuadro:hover {
    transform: scale(1.05); /* Agrandar un poco al pasar el mouse */
  }
    </style>
    <title>Ciclismo</title>
</head>

<body >
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
<section class="Carrusel">
    

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
  
      <!-- Slides -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="ciclismo\img\ciclismo_carrusel.png" class="d-block w-100" alt="..." >
        </div>
        <div class="carousel-item">
          <img src="ciclismo\img\Giro.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="ciclismo\img\Richard-Carapaz.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
  
      <!-- Controls -->
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
      </a>
    </div>
 
      
      
      
  </section>
  



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
    <footer class="mt-2 col-lg-12">
        <div class="row justify-content-around mt-3">
            <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                <div class="caja m-2">

                    <a href="https://www.facebook.com/mutantessport?mibextid=avESrC"><img src="FOOTER/img/facebook.png" width="30px" height="30px" style="margin-top: 20px;"></a>
                    <a href="https://www.facebook.com/mutantessport?mibextid=avESrC">
                        <p>Facebook</p>
                    </a>
                    <p>@MutanteSport</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                <div class="caja m-2">
                    <a href="https://instagram.com/mutantesport360?utm_source=qr&igshid=MzNlNGNkZWQ4Mg%3D%3D"><img src="FOOTER/img/instagram.png" width="30px" height="30px" style="margin-top: 20px;"></a>
                    <a href="https://instagram.com/mutantesport360?utm_source=qr&igshid=MzNlNGNkZWQ4Mg%3D%3D ">
                        <p>Instagram</p>
                    </a>
                    <p>@MutanteSport</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                <div class="caja m-2">
                    <a href="https://twitter.com/MutantesSp43173?t=dVIYLWI8dcuve_lbzEAS0w&s=09"><img src="FOOTER/img/signo-de-twitter.png" width="30px" height="30px" style="margin-top: 20px;"></a>
                    <a href="https://twitter.com/MutantesSp43173?t=dVIYLWI8dcuve_lbzEAS0w&s=09">
                        <p>Twitter</p>
                    </a>
                    <p>@MutanteSport</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                <div class="caja m-2">
                    <a href="http://tiktok.com/@mutantessport"><img src="FOOTER/img/tik-tok.png" width="30px" height="30px" style="margin-top: 20px;"></a>
                    <a href="http://tiktok.com/@mutantessport">
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

 <!-- Pestaña "Calendario" -->
 <div id="calendarTab">Calendario</div>

<!-- Contenedor del menú desplegable -->
<div id="menuContainer">
    <div id="menuContent">
        <h2>Calendario</h2>
        <?php
        // Función para verificar si una fecha está marcada y obtener su título
        function getMarkedTitle($day, $month) {
            $markedDates = [
                ['day' => 3, 'month' => 9, 'title' => 'Clásica Bretaña'], // 3 septiembre Clásica Bretaña
                ['day' => 8, 'month' => 9, 'title' => 'Gran Premio de Québec (Canadá)'], // 8 septiembre Gran Premio de Québec (Canadá)
                ['day' => 10, 'month' => 9, 'title' => 'Gran Premio de Montreal (Canadá)'], // 10 septiembre Gran Premio de Montreal (Canadá)
            ];

            foreach ($markedDates as $date) {
                if ($date['day'] == $day && $date['month'] == $month) {
                    return $date['title'];
                }
            }
            return false;
        }

        // Obtener el mes y el año actual
        $mesActual = date("n");
        $anioActual = date("Y");

        // Calcular el primer y último día del mes
        $primerDia = mktime(0, 0, 0, $mesActual, 1, $anioActual);
        $ultimoDia = mktime(0, 0, 0, $mesActual + 1, 0, $anioActual);
        ?>

        <table>
            <caption><?php echo date("F Y", $primerDia); ?></caption>
            <tr>
                <th>Lun</th>
                <th>Mar</th>
                <th>Mié</th>
                <th>Jue</th>
                <th>Vie</th>
                <th>Sáb</th>
                <th>Dom</th>
            </tr>
            <tr>
                <?php
                // Rellenar celdas en blanco hasta el primer día del mes
                for ($i = 1; $i < date("N", $primerDia); $i++) {
                    echo "<td></td>";
                }

                // Ciclo para mostrar los días del mes
                for ($dia = 1; $dia <= date("j", $ultimoDia); $dia++) {
                    $isMarked = getMarkedTitle($dia, $mesActual);
                    $class = $isMarked ? 'marked-date' : '';

                    echo "<td class='$class'>$dia</td>";
                    if (date("N", mktime(0, 0, 0, $mesActual, $dia, $anioActual)) == 7) {
                        echo "</tr><tr>";
                    }
                }

                // Rellenar celdas en blanco después del último día del mes
                $ultimoDiaSemana = date("N", $ultimoDia);
                for ($i = $ultimoDiaSemana; $i < 7; $i++) {
                    echo "<td></td>";
                }
                ?>
            </tr>
        </table>
    </div>

    <div class="recuadro">
<p>3 septiembre Clásica Bretaña</p>
</div>

<div class="recuadro">
<p>8 septiembre Gran Premio de Québec (Canadá)</p>
</div>

<div class="recuadro">
<p>10 septiembre Gran Premio de Montreal (Canadá)</p>
</div>
</div>

<!-- Agrega los enlaces a los archivos JavaScript de Bootstrap y jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        // Manejar el clic en el botón "Calendario"
        $("#calendarTab").click(function() {
            // Mostrar u ocultar el menú
            if ($("#menuContainer").css("right") === "0px") {
                $("#menuContainer").css("right", "-300px"); // Ocultar el menú
            } else {
                $("#menuContainer").css("right", "0px"); // Mostrar el menú
            }
        });
    });
</script>
</body>

</html>