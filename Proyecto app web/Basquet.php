<?php
session_start(); // Inicia la sesión

if (!isset($_SESSION["username"])) {
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
  <title>Sport360</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  
  <style>
    body {
      background-color: #fcfbfb;
    }

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

    .navbar-brand img {
      width: 300px;
      height: 120px;
    }
    html,nav, .navbar-nav, .navbar-light, .navbar-brand, .navbar-expand-lg .navbar-nav .nav-link, .navbar-light .navbar-nav .nav-link, .navbar-light .navbar-brand, .navbar-toggler-icon, .navbar-toggler,section,footer,.container,.container-fluid {
            
            font-family: 'Bebas Neue', sans-serif;
          }

  

    .btn-primary {
      background-color: #050505;
      border-color: #007bff;
    }

    .btn-primary:hover {
      background-color: #0069d9;
      border-color: #0069d9;
    }

    .btn-danger {
      background-color: #dc3545;
      border-color: #dc3545;
    }

    .btn-danger:hover {
      background-color: #c82333;
      border-color: #bd2130;
    }

    .columna1,
    .columna2,
    .columna3,
    .columna4 {
      border: 1px solid black;
      border-radius: 10px;
      background-color: #ffffff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    .columna3 {
      background-color: rgb(247, 244, 241);
    }

    .columna4 {
      background-color: rgb(247, 248, 246);
    }

    
    .caja {
      border: 1px solid #fcfbfb;
      text-align: center;
    }
    

    .caja>a {
      color: inherit;
      text-decoration: none;
    }

    .columna2 img {
      width: 200px;
      height: 150px;
      border-radius: 10px;
      transition: all 0.5s ease;
    }

    .columna2 img:hover {
      transform: scale(1.2);
    }

    footer {
      background-color: #050505;
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

    footer .caja p {
      margin: 0;
    }

    /* Añade las siguientes clases para las animaciones */
    .animated {
      animation-duration: 1s;
      animation-fill-mode: both;
    }

    .fadeIn {
      animation-name: fadeIn;
    }

    .slideInRight {
      animation-name: slideInRight;
    }

    .zoomIn {
      animation-name: zoomIn;
    }

    /* Definición de las animaciones */
    @keyframes fadeIn {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }

    @keyframes slideInRight {
      from {
        transform: translateX(100%);
      }
      to {
        transform: translateX(0);
      }
    }

    @keyframes zoomIn {
      from {
        transform: scale(0);
      }
      to {
        transform: scale(1);
      }
    }

    /* Agrega esta regla para dar bordes redondeados a las imágenes */
    .carousel-inner img,
    .img-fluid,
    .caja img {
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }
    .text-center{
      color: black;
      text-shadow: 2px 2px yellow;
    }
    
    

  </style>
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

   <script>
    $(document).ready(function () {
      $("#abrirArchivo").click(function () {
        $.ajax({
          url: "archivo_operaciones.php",
          type: "GET",
          data: { action: "abrir" },
          success: function (data) {
            $("#contenido").val(data);
          }
        });
      });

      $("#borrarTexto").click(function () {
        $("#contenido").val("");
      });

      $("#guardarTexto").click(function () {
        var contenido = $("#contenido").val();
        $.ajax({
          url: "archivo_operaciones.php",
          type: "POST",
          data: { action: "guardar", contenido: contenido },
          success: function (data) {
            alert(data); // Muestra el mensaje de éxito o error
          }
        });
      });
    });
  </script>

   <script>
    $(document).ready(function() {
      $(".columna2 img").hover(
        function() {
          $(this).addClass("enlarged");
        },
        function() {
          $(this).removeClass("enlarged");
        }
      );
    });
  </script>
</head>

<body>
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
        <img src="BASQUET/nba.jpg" alt="Slide 1" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="BASQUET/nba2.png" alt="Slide 2" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="BASQUET/nba3.jpg" alt="Slide 3" class="d-block w-100">
      </div>
    </div>

    <!-- Espacio después del carrusel -->
  <div style="height: 20px;"></div>

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

  <div class="container-fluid align-items-stretch">
    <div class="row">
      <div class="col-lg-8 col-md-6 col-sm-12">
        <div class="columna1 p-3">
          <a href="https://www.espn.com.co/basquetbol/" target="_blank"><h6 class="font-weight-bold"><img src="BASQUET/i.png" alt=""></a>NBA</h6>
          <iframe width="100%" height="360" src="https://www.espn.com.co/core/video/iframe?id=12325841&endcard=false" allowfullscreen frameborder="0"></iframe>
          <a href="https://www.espn.com.co/basquetbol/" target="_blank"><h4 class="text-center">Cavaliers ganan su primer título de la NBA Summer League</h4></a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="columna2 p-3 d-none d-sm-block">
          <h3 class="text-center">Títulares</h3>
          <hr>
          <dl>
            <dd>- Suns y CP3, en pláticas sobre su futuro</dd>
            <dd>- Jimmy Butler: ganar el título de la NBA es "todo"</dd>
            <dd>- Malone exige disciplina a Nuggets para J3</dd>
            <dd>- Tyler Herro sigue en duda para el Juego 3</dd>
            <dd>- Sparks reficha a Samuelson por el resto de la temporada</dd>
            <dd>- Team USA femenino gana Copa Mundial FIBA 3x3</dd>
            <dd>- Fuentes: Suns hacen a Young el asistente mejor pagado</dd>
            <dd>- Knicks: Julius Randle (tobillo izq.) fue operado</dd>
            <dd>- Realidad o ficción: ¿El Heat ya encontró la fórmula para ganar las Finales de la NBA?</dd>
          </dl>
        </div>
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-lg-8 col-md-6 col-sm-12">
        <div class="columna3 p-3">
          <h3><img src="BASQUET/a.png" alt="" width="80" height="70"> Finales de la NBA</h3>
          <iframe width="100%" height="360" src="https://www.espn.com.co/core/video/iframe?id=12160397&endcard=false"
            allowfullscreen frameborder="0"></iframe>
          <a href="https://espndeportes.espn.com/video/clip/_/id/12160397" target="_blank"><h4 class="text-center">Finales NBA: la confianza de Miami y las preocupaciones de Denver</h4></a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="columna2 p-3 d-none d-sm-block">
          <h3 class="text-center">Finales 2023</h3>
          <hr>
          <center><img src="BASQUET/b.jpeg" alt="" class="img-fluid"></center>
          <hr>
          <p>
            Finales NBA 2023 Denver Nuggets vs. Miami Heat: cómo ver la serie, calendario, noticias, resultados,
            análisis y más.
          </p>
          <p>
            Todo lo que necesitas saber sobre las Finales de la NBA entre el Miami Heat y los Denver Nuggets está
            aquí, incluyendo cómo ver la serie por ESPN Deportes.
          </p>
        </div>
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-lg-8 col-md-6 col-sm-12">
        <div class="columna4 p-3">
          <h3><img src="BASQUET/a.png" alt="" width="80" height="70"> Finales de la NBA</h3>
          <center><img src="BASQUET/c.jpeg" alt="" class="img-fluid" id="animated-image2"></center>
          <h4 class="text-center">Con pequeños ajustes y una enorme resiliencia, el Miami Heat lo hizo de nuevo</h4>
          <div style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);">
            <iframe width="100%" height="360" src="https://www.espn.com.co/core/video/iframe?id=12154599&endcard=false"
              allowfullscreen frameborder="0"></iframe>
            <a href="https://espndeportes.espn.com/video/clip/_/id/12154599" target="_blank"><h4 class="text-center">Erik Spoelstra: "Tratamos de hacerle las cosas difíciles a Jokic"</h4></a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="columna2 p-3 d-none d-sm-block">
          <h3 class="text-center">El club de los 50 puntos 2022-23</h3>
          <hr>
          <center><img src="BASQUET/d.jpeg" alt="" class="img-fluid"></center>
          <hr>
          <p>
            Bienvenidos al club de los 50: las mejores producciones ofensivas de la temporada NBA
            ¿Qué jugadores pasaron la frontera de los 50 puntos en un partido? Uno por uno, un recorrido a todos los
            genios en sus noches de inspiración.
          </p>
          <h3 class="text-center">NBARank</h3>
          <hr>
          <center><img src="BASQUET/h.jpeg" alt="" class="img-fluid"></center>
          <p>
            NBArank 2022: Ranking de los mejores jugadores para 2022-23, del 5 al 1
            Giannis, Luka y el Joker luchan por el primer puesto, mientras que Steph es el único jugador nacido en
            Estados Unidos entre los cinco primeros.
          </p>
        </div>
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-lg-8 col-md-6 col-sm-12">
        <div class="columna3 p-3">
          <h3><img src="BASQUET/e.png" alt="" width="80" height="70">NUGGETS</h3>
          <center><img src="BASQUET/f.jpeg" alt="" class="img-fluid" id="animated-image"></center>
          <a href="https://www.hechoencalifornia1010.com/jamal-murray-en-busca-de-revancha/" target="_blank"><h4 class="text-center">Jamal Murray, en busca de revancha</h4></a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 ">
        <div class="columna2 p-3 d-none d-sm-block">
          <h3 class="text-center">LeBron: cada punto, en cada camiseta</h3>
          <hr>
          <center><img src="BASQUET/g.jpeg" alt="" class="img-fluid"></center>
          <hr>
          <p>
            Las inagotable colección de camisetas con las que 'El Rey' hizo historia
            LeBron James, el nuevo líder de anotaciones de todos los tiempos de la NBA, también podría ser el líder no
            oficial de la NBA en apariencias únicas.
          </p>
        </div>
      </div>
    </div>

    <div class="container mt-4">
  <h2 class="text-center mb-3">Comentarios</h2>

  <form id="comentarioForm" class="mt-3 p-3 border rounded bg-light">
    <div class="form-group">
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="comentario">Comentario:</label>
      <textarea id="comentario" name="comentario" rows="4" class="form-control" required></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Enviar Comentario</button>
  </form>

  <div id="comentarios" class="mt-4 p-3 border rounded bg-light">
    <?php include 'mostrar_comentarios.php'; ?>
  </div>
</div>

  </div>

  <footer class="mt-2">
    <div class="container">
      <div class="row justify-content-around mt-3">
        <div class="col-lg-2 col-md-4 col-sm-6 col-6">
          <div class="caja">
            <a href="#"><img src="FOOTER/img/facebook.png" alt=""></a>
            <a href="#">
              <p class="font-weight-bold">Facebook</p>
            </a>
            <p>@Sport360</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6">
          <div class="caja">
            <a href="#"><img src="FOOTER/img/instagram.png" alt=""></a>
            <a href="#">
              <p class="font-weight-bold">Instagram</p>
            </a>
            <p>@Sport360</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6">
          <div class="caja">
            <a href="#"><img src="FOOTER/img/signo-de-twitter.png" alt=""></a>
            <a href="#">
              <p class="font-weight-bold">Twitter</p>
            </a>
            <p>@Sport360</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6">
          <div class="caja">
            <a href="#"><img src="FOOTER/img/tik-tok.png" alt=""></a>
            <a href="#">
              <p class="font-weight-bold">Tiktok</p>
            </a>
            <p>@Sport360</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6">
          <div class="caja">
            <a href="#"><img src="FOOTER/img/youtube.png" alt=""></a>
            <a href="#">
              <p class="font-weight-bold">YouTube</p>
            </a>
            <p>@Sport360</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6">
          <div class="caja">
            <a href="#"><img src="FOOTER/img/tumblr-logo.png" alt=""></a>
            <a href="#">
              <p class="font-weight-bold">Tumblr</p>
            </a>
            <p>@Sport360</p>
          </div>
        </div>
      </div>
      <hr>
      <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <center><p class="">© 2023 Sport360. Todos los derechos reservados.</p></center>
         
        </div>
      </div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <script>
    $(document).ready(function() {
      $("#animated-image2").hover(
        function() {
          $(this).animate({
            marginLeft: "50px"
          }, 500);
        },
        function() {
          $(this).animate({
            marginLeft: "0"
          }, 500);
        }
      );
    });
  </script>

<script>
   $(document).ready(function() {
    // Define la URL de la nueva imagen que quieres mostrar
    const nuevaUrlImagen = "BASQUET/ff.jpeg";

    // Función para actualizar la fuente de la imagen y hacer que aparezca nuevamente con fadeIn
    function actualizarFuenteImagenYAparecer() {
      $("#animated-image").attr("src", nuevaUrlImagen);
      $("#animated-image").fadeIn(2000);
    }

    // Efecto hover para la animación de desaparecer y reaparecer
    $("#animated-image").hover(
      function() {
        $(this).fadeOut(2000, actualizarFuenteImagenYAparecer);
      },
      function() {
        // No necesitamos hacer nada aquí, ya que el fadeIn se maneja en la función actualizarFuenteImagenYAparecer
      }
    );
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
      // Animación para la columna1
      $('.columna1').addClass('animated fadeIn');

      // Animación para la columna2
      $('.columna2').addClass('animated slideInRight');

      // Animación para la columna3
      $('.columna3').addClass('animated fadeIn');

      // Animación para la columna4
      $('.columna4').addClass('animated zoomIn');

      // Animación para el footer
      $('footer').addClass('animated fadeIn');

      // Desvanecimiento al pasar el cursor sobre una imagen
      $('.fadeOnHover').hover(
        function() {
          $(this).addClass('animated fadeOut');
        },
        function() {
          $(this).removeClass('animated fadeOut');
        }
      );
      
    });
  </script>
   <script>
$(document).ready(function() {
  $("#comentarioForm").submit(function(event) {
    event.preventDefault();

    var nombre = $("#nombre").val();
    var comentario = $("#comentario").val();

    $.ajax({
      type: "POST",
      url: "guardar_comentario.php",
      data: { nombre: nombre, comentario: comentario },
      success: function() {
        $("#nombre").val("");
        $("#comentario").val("");
        $("#comentarios").load("mostrar_comentarios.php");
      }
    });
  });
});
</script>
</body>

</html>