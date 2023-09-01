<?php
session_start(); // Inicia la sesión

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UFC</title>
   
    <link rel="stylesheet" href="css.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
   


    <style>

       
 .caja {
    border: 1px solid #fcfbfb;
    text-align: center;
    margin-top: 20px; /* Ajusta este valor para controlar la distancia vertical */
    margin-left: 10px; /* Ajusta este valor para controlar la distancia horizontal izquierda */
    margin-right: 10px; /* Ajusta este valor para controlar la distancia horizontal derecha */
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

        .caja>a {
            color: inherit;
            text-decoration: none;
        }
        footer{
            background-color: #050505;
            color: #ffffff
        }
        .card-img-top {
            height: 250px; /* Ajusta la altura de las imágenes */
            object-fit: cover; /* Ajusta el recorte de las imágenes para mantener las proporciones */
        }
        .card-img-top:hover {
            transform: scale(1.1); /* Aplica la escala de 1.1 al pasar el mouse por encima */
        }
        .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    color: #fff;
    display: none;
    justify-content: center;
    align-items: center;
    padding: 20px;
}

.card:hover .overlay {
    display: flex;
}
.btn-primary{
            background-color: #050505;
            margin: 0%;
          }

  </style>




  </head>
  <body style="background-color: #e2dbdb;">
    <header>
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
        
    </header>
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
            <img src="FOOTER/img/nuevaportada.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="FOOTER/img/charles.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="FOOTER/img/pe2.jpg" class="d-block w-100" alt="...">
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
    
    <hr>
    <center><h2 style="font-size: 54px; color: rgb(11, 11, 11); text-shadow: 2px 2px 4px rgba(248, 240, 5, 0.5); font-family: 'Bebas Neue', sans-serif;">Ultimos sucesos</h2></center>
    <hr>
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-md-4">
                <div class="card">
                    <img src="Proyecto AppwEB/040323-thumb-alexa-grasso-br-ufc-285-GettyImages-1471343811.jpg" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Alexa Grasso Campeona de las 125lb!!</h5>
                        <p class="card-text">La campeona Alexa Graso pudo vencer a la reina de esta división Valentina</p>
                        <p class="overlay">La Mexicana Alexa Grasso defenderá el cinturón de peso mosca frente a la ex campeona Valentina Shevchenko el 16 de septiembre en Las Vegas.

                          Para muchos entendidos, ya pasó el tiempo de la nacionalizada Peruana, no a sabido sostener en el tiempo todas esas habilidades, ingenio, planteamiento y diferencia con sus contendientes, argumentan que hoy en día, se aburguesó y no a sabido hacerle frente a nuevas rivales. Dejó muchas dudas ante la Brasilera Taila Santos por DD y luego fue sometida por la de Jalisco por sumisión..</p>
                
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="Proyecto AppwEB/ufc2.jpg" class="card-img-top img-fluid" alt="">
                    <div class="card-body">
                        <h5 class="card-title">KAI KARA FRANCE vs ALBAZI</h5>
                        <p class="card-text">Desicion dividida de los juces muy controversial para ALBAZI</p>
                        <p class="overlay">Este 3 de junio los fanáticos de la UFC disfrutarán de la pelea entre el neozelandés Kai Kara-France y el iraquí Amir Albazi 12.

                          El evento es uno de los más importantes del año en lo que a artes marciales mixtas se refiere y congregará a cientos de personas que se acercarán hasta Las Vegas para verlo en vivo..</p>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="Proyecto AppwEB/MAKHACHEV_ISLAM_BELT_02-11.png" class="card-img-top img-fluid" alt="">
                    <div class="card-body">
                        <h5 class="card-title">CAMPEÓN RUSO, PODRA SEGUIR EL LEGADO DE KHABIB</h5>
                        <p class="card-text">Con su titulo de peso Ligero</p>
                        <p class="overlay">El ruso Islam Makhachev retuvo el domingo su título mundial del peso ligero de la Ultimate Fighting Championship (UFC, artes marciales mixtas) derrotando por puntos al australiano Alexander Volkanovski en Perth (Australia).


                          De esta manera, Makhachev acabó con el sueño de su rival, vigente campeón del peso pluma, de convertirse en el quinto luchador que ostenta simultáneamente dos títulos mundiales en la historia de la UFC, pese al apoyo unánime del público de Perth a Volkanovski.
                          
                          </p>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>
    <center><h2 style="font-size: 54px; color: rgb(11, 11, 11); text-shadow: 2px 2px 4px rgba(233, 214, 11, 0.5); font-family: 'Bebas Neue', sans-serif;">Proximas Peleas</h2></center>


    <hr>
    <body>
      <div class="container">
          <div class="row justify-content-around">
            <div class="col-md-4">
              <div class="card">
                  <img src="FOOTER/img/omaili.png" class="card-img-top img-fluid" alt="">
                  <div class="card-body">
                      <h5 class="card-title">STERLING VS O'MALLEY</h5>
                      <p class="card-text" style="display:none;">El ex campeón mundial de la división de peso medio de UFC, el brasilero Alex Pereira, se enfrentará al actual clasificado mundial número tres de la división de peso semicompleto de UFC, el polaco Jan Błachowicz, la pelea será el choque co-estelar de la cartelera UFC 291, la cual se llevará a cabo el próximo sábado, 29 de julio, en el Vivint Arena de la ciudad de Salt Lake City, Utah.</p>
                      <button class="btn btn-primary btn-scale">VER MÁS</button>

                      <!-- Botón "VER MENOS" (oculto por defecto) -->
                      <button class="btn btn-secondary btn-hide" style="display: none;">VER MENOS</button>
                  </div>
              </div>
          </div>
          
              <div class="col-md-4">
                  <div class="card">
                      <img src="FOOTER/img/pereira.png" class="card-img-top img-fluid" alt="">
                      <div class="card-body">
                          <h5 class="card-title">Jan Blachowicz vs Alex Pereira</h5>
                          <p class="card-text" style="display:none;">El ex campeón mundial de la división de peso medio de UFC, el brasilero Alex Pereira, se enfrentará al actual clasificado mundial número tres de la división de peso semicompleto de UFC, el polaco Jan Błachowicz, la pelea será el choque co-estelar de la cartelera UFC 291, la cual se llevará a cabo el próximo sábado, 29 de julio, en el Vivint Arena de la ciudad de Salt Lake City, Utah.</p>
                          <button class="btn btn-primary btn-scale">VER MÁS</button>

                          <!-- Botón "VER MENOS" (oculto por defecto) -->
                          <button class="btn btn-secondary btn-hide" style="display: none;">VER MENOS</button>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="card">
                      <img src="FOOTER/img/poriervsga.png" class="card-img-top img-fluid" alt="">
                      <div class="card-body">
                          <h5 class="card-title">Poirier vs. Gaethje 2</h5>
                          <p class="card-text" style="display:none;">Los ex campeones interinos Dustin Poirier y Justin Gaethje chocarán a cinco asaltos en el Vivint Arena de Salt Lake City. En su primera batalla en 2018 'The Diamond' fue el ganador por nocaut en el cuarto round.</p>
                          <button class="btn btn-primary btn-scale">VER MÁS</button>

                      <!-- Botón "VER MENOS" (oculto por defecto) -->
                      <button class="btn btn-secondary btn-hide" style="display: none;">VER MENOS</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="container mt-4">
  <h2 class="text-center mb-3">Comentarios UFC</h2>

  <form id="comentarioFormUFC" class="mt-3 p-3 border rounded bg-light">
    <div class="form-group">
      <label for="nombreUFC">Nombre:</label>
      <input type="text" id="nombreUFC" name="nombreUFC" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="comentarioUFC">Comentario:</label>
      <textarea id="comentarioUFC" name="comentarioUFC" rows="4" class="form-control" required></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Enviar Comentario</button>
  </form>

  <div id="comentariosUFC" class="mt-4 p-3 border rounded bg-light">
    <?php include 'mostrar_comentarios_ufc.php'; ?>
  </div>
</div>


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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


    <script>
      // IMAGENES
      $(document).ready(function() {
        $('.caja img').on('mouseenter', function() {
          // Escalar la imagen al 110% de su tamaño original
          $(this).css('transform', 'scale(1.1)');
        });

        $('.caja img').on('mouseleave', function() {
            // Restablecer la escala de la imagen al tamaño original
          $(this).css('transform', '');
        });
      });
      
    </script>
    <script>
      $(document).ready(function () {
        // Agregar un evento de clic al botón "VER MÁS" de cada caja
        $(".btn-scale").on("click", function () {
          // Obtener el párrafo oculto dentro de la caja actual
          var paragraph = $(this).closest(".card-body").find("p");
          // Mostrar el párrafo oculto utilizando un efecto de desvanecimiento
          paragraph.fadeIn();
          // Ocultar el botón "VER MÁS" y mostrar el botón "VER MENOS"
          $(this).hide();
          $(this).siblings(".btn-hide").show();
        });
    
        // Agregar un evento de clic al botón "VER MENOS" de cada caja
        $(".btn-hide").on("click", function () {
          // Obtener el párrafo oculto dentro de la caja actual
          var paragraph = $(this).closest(".card-body").find("p");
          // Ocultar el párrafo oculto utilizando un efecto de desvanecimiento
          paragraph.fadeOut();
          // Ocultar el botón "VER MENOS" y mostrar el botón "VER MÁS"
          $(this).hide();
          $(this).siblings(".btn-scale").show();
        });
      });
    </script>
    <script>
  $(document).ready(function() {
    $("#comentarioFormUFC").submit(function(event) {
      event.preventDefault();

      var nombreUFC = $("#nombreUFC").val();
      var comentarioUFC = $("#comentarioUFC").val();

      $.ajax({
        type: "POST",
        url: "guardar_comentario_ufc.php",
        data: { nombreUFC: nombreUFC, comentarioUFC: comentarioUFC },
        success: function() {
          $("#nombreUFC").val("");
          $("#comentarioUFC").val("");
          $("#comentariosUFC").load("mostrar_comentarios_ufc.php");
        }
      });
    });
  });
</script>
  </body>
</html>