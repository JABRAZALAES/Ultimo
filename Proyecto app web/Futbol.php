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
  <title>FUTBOL</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="JS/jQuery v3.7.0.js"></script>
  <link href="https://fonts.google.com/specimen/Kanit" rel="stylesheet">
  <script>
   $(document).ready(function() {
  $('.ver-mas').click(function() {
    var tarjetatxt = $(this).closest('.card-body').find('.card-text');
    var duracion = 1000; 
    tarjetatxt.slideToggle(duracion);

    if ($(this).text() === 'Ver más') {
      $(this).text('Ver menos');
    } else {
      $(this).text('Ver más');
    }
  });
})
    $(document).ready(function() {
        $('.caja img').on('mouseenter', function() {
          $(this).css('transform', 'scale(1.1)');
        });

        $('.caja img').on('mouseleave', function() {
          $(this).css('transform', '');
        });
      });
    </script>
  <style>
     .caja {
            border: 1px solid #f9f5f5;
            text-align: center;
        }

    .caja>a {
      color: inherit;
      text-decoration: none;
    }

    footer {
      background-color: #040404;
      color: #ffffff
    }
    .cuadro img:hover {
            transform: scale(1.05);
        }
        body {
      background-color: #e2dbdb;
    }
    html,nav, .navbar-nav, .navbar-light, .navbar-brand, .navbar-expand-lg .navbar-nav .nav-link, .navbar-light .navbar-nav .nav-link, .navbar-light .navbar-brand, .navbar-toggler-icon, .navbar-toggler,section,footer,.container,.container-fluid {
            
            font-family: 'Kanit', sans-serif;
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
        .card-title{
          color: black;
      text-shadow: 2px 2px yellow;
        }
        .btn-primary{
            background-color: #050505;
            margin: 0%;
          }
  
       
  </style>
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
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 mt-4">
        <div class="card">
          <img src="FOOTER/img/messin1.webp" class="card-img-top" alt="Imagen de la noticia">
          <div class="card-body">
            <h5 class="card-title">Messi: "No sé si el Barça hizo todo lo posible para ficharme..."</h5>
            <p class="card-text" style="display: none;" >El jugador argentino anuncia en sendas entrevistas con Sport y Mundo Deportivo su
              fichaje por el Inter Miami y argumenta su no regreso al Barcelona.</p>
            <div class="noticia-completa">
              <p></p>
            </div>
            <button class="btn btn-primary mt-3 ver-mas" data-toggle="noticia1">Ver más</button>
          </div>
        </div>
      </div>
      <div class="col-md-4 mt-4">
        <div class="card">
          <img src="FOOTER/img/messin2.jpg" class="card-img-top" alt="Imagen de la noticia">
          <div class="card-body">
            <h5 class="card-title">Busquets, Luis Suárez, Jordi Alba y Di María: los socios para Messi que baraja Inter
              Miami</h5>
            <p class="card-text" style="display: none;">El inminente anuncio de la llegada de Messi al club de Florida trae consigo a varios
              conocidos que están en la agencia libre y podrían unirse al astro argentino en la MLS.</p>
            <div class="noticia-completa">
              <p></p>
            </div>
            <button class="btn btn-primary mt-3 ver-mas" data-toggle="noticia2">Ver más</button>
          </div>
        </div>
      </div>
      <div class="col-md-4 mt-4">
        <div class="card">
          <img src="FOOTER/img/platan3.webp" class="card-img-top" alt="Imagen de la noticia">
          <div class="card-body">
            <h5 class="card-title">Luego del descenso del Valladolid, sorprendió el lugar donde apareció Plata</h5>
            <p>.</p>
            <p class="card-text" style="display: none;">Luego del descenso del Valladolid, sorprendió el lugar donde apareció Plata El jugador
              fue una de &nbsp;las figuras del club. El equipo no pudo mantener el nivel mostrado la temporada pasada
              cuando logró ascender a primera</p>
            <div class="noticia-completa">
              <p></p>
            </div>
            <button class="btn btn-primary mt-3 ver-mas" data-toggle="noticia3">Ver más</button>
          </div>
        </div>
      </div>
      <div class="col-md-12 mt-12">
        <div class="card">
          <img src="FOOTER/img/ecuador.jpg" class="card-img-top" alt="Imagen de la noticia">
          <div class="card-body">
            <h5 class="card-title">La Selección de Ecuador enfrentará dos amistosos en junio</h5>
            <p class="card-text" style="display: none;">La Federación Ecuatoriana de Fútbol confirmó las nuevas fechas en las que la Selección
              de Fútbol enfrentará partidos amistosos previo al inicio de las Eliminatorias hacia la Copa Mundial de la
              FIFA México/Estados Unidos/Canadá 2026.</p>
            <div class="noticia-completa">
              <p></p>
            </div>
            <button class="btn btn-primary mt-3 ver-mas" data-toggle="noticia3">Ver más</button>
          </div>
        </div>
      </div>
      <div class="col-md-4 mt-4">
        <div class="card">
          <img src="FOOTER/img/aucas.jpg" class="card-img-top" alt="Imagen de la noticia">
          <div class="card-body">
            <h5 class="card-title">SIN GOLES: Aucas empató ante Ñublense y se complicó en la Libertadores</h5>
            <p class="card-text" style="display: none;">Por la quinta fecha del grupo A de la Copa Libertadores, Aucas recibió a Ñublense en el
              estadio Gonzalo Pozo Ripalda. El resultado final fue 0-0.</p>
            <div class="noticia-completa">
              <p></p>
            </div>
            <button class="btn btn-primary mt-3 ver-mas" data-toggle="noticia3">Ver más</button>
          </div>
        </div>
      </div>
      <div class="col-md-4 mt-4">
        <div class="card">
          <img src="FOOTER/img/angekmena.jpg" class="card-img-top" alt="Imagen de la noticia">
          <div class="card-body">
            <h5 class="card-title">Ángel Mena y Byron Castillo, campeones de la Concachampions con Club León</h5>
            <p class="card-text" style="display: none;">Ángel Mena y Byron Castillo se consagraron CAMPEONES de la Concachampions con Club
              León, al derrotar al LAFC de Diego Palacios y José Cifuentes.
              Con un global de 3-1 (victoria 2-1 en la ida y 0-1 en la vuelta), el equipo mexicano es el
              nuevo campeón del torneo, obteniendo un cupo al Mundial de Clubes 2023.
            </p>
            <div class="noticia-completa">
              <p></p>
            </div>
            <button class="btn btn-primary mt-3 ver-mas" data-toggle="noticia3">Ver más </button>
          </div>
        </div>
      </div>
      <div class="col-md-4 mt-4">
        <div class="card">
          <img src="FOOTER/img/pervis.jpg" class="card-img-top" alt="Imagen de la noticia">
          <div class="card-body">
            <h5 class="card-title">Pervis Estupiñán fue elegido como «Jugador del Mes» en el Brighton</h5>
            <p class="card-text" style="display: none;">Pervis Estupiñán ha conseguido un nuevo premio en Inglaterra al ser elegido como el
              Mejor Jugador del Mes del Brighton.

              El tricolor tuvo un mes inmaculado donde marcó un gol en el Emirates Stadium ante el Arsenal y ha sido
              figura en los partidos finales del Brighton.</p>
            <div class="noticia-completa">
              <p></p>
            </div>
            <button class="btn btn-primary mt-3 ver-mas" data-toggle="noticia3">Ver más </button>
          </div>
        </div>
      </div>
      <div class="col-md-4 mt-4">
        <div class="card">
          <img src="FOOTER/img/diegoP.webp" class="card-img-top" alt="Imagen de la noticia">
          <div class="card-body">
            <h5 class="card-title">Diego Palacios, en el 11 ideal de la Concachampions</h5>
            <p class="card-text" style="display: none;">La Concachampions llegó a su final, pero no todo ha sido malo para el cuadro de LAFC.
              Parte de sus jugadores destacaron de principio a fin,
              lo que ha sido bien observado por parte de la Concacaf, organizadora del torneo.</p>
            <div class="noticia-completa">
              <p></p>
            </div>
            <button class="btn btn-primary mt-3 ver-mas" data-toggle="noticia3">Ver más </button>
          </div>
        </div>
      </div>
      <div class="col-md-4 mt-4">
        <div class="card">
          <img src="FOOTER/img/platax2.jpg" class="card-img-top" alt="Imagen de la noticia">
          <div class="card-body">
            <h5 class="card-title">El Bournemouth estaría interesado en Gonzalo Plata</h5>
            <p class="card-text" style="display: none;">Tras el descenso del Real Valladolid el conjunto inglés habría sondeado el fichaje del
              extremo ecuatoriano.</p>
            <div class="noticia-completa">
              <p></p>
            </div>
            <button class="btn btn-primary mt-3 ver-mas" data-toggle="noticia3">Ver más </button>
          </div>
        </div>
      </div>
      <div class="col-md-4 mt-4">
        <div class="card">
          <img src="FOOTER/img/barce.jpeg" class="card-img-top" alt="Imagen de la noticia">
          <div class="card-body">
            <h5 class="card-title">FIN DEL SUEÑO: Palmeiras remontó y eliminó a BSC de la Libertadores</h5>
            <p class="card-text" style="display: none;">Palmeiras recibió a Barcelona SC en el Allianz Parque, por la fecha 5 del grupo C de la
              Copa Libertadores.
              El resultado final fue 4-2 a favor del ‘verdao’.</p>
            <div class="noticia-completa">
              <p></p>
            </div>
            <button class="btn btn-primary mt-3 ver-mas" data-toggle="noticia3">Ver más </button>
          </div>
        </div>
      </div>

    
    <div class="container mt-4">
  <h2 class="text-center mb-3">Comentarios FÚTBOL</h2>

  <form id="comentarioFormFutbol" action="guardar_comentario_futbol.php" method="post" class="mt-3 p-3 border rounded bg-light">
        <div class="form-group">
            <label for="nombreFutbol">Nombre:</label>
            <input type="text" id="nombreFutbol" name="nombreFutbol" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="comentarioFutbol">Comentario:</label>
            <textarea id="comentarioFutbol" name="comentarioFutbol" rows="4" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Enviar Comentario</button>
    </form>

    <div id="comentariosFutbol" class="mt-4 p-3 border rounded bg-light">
        <?php include 'mostrar_comentarios_futbol.php'; ?>
    </div>

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
      

  
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    </div>
  </div>
  <script>
        $(document).ready(function() {
            $("#comentarioFormFutbol").submit(function(event) {
                event.preventDefault();

                var nombreFutbol = $("#nombreFutbol").val();
                var comentarioFutbol = $("#comentarioFutbol").val();

                $.ajax({
                    type: "POST",
                    url: "guardar_comentario_futbol.php",
                    data: { nombreFutbol: nombreFutbol, comentarioFutbol: comentarioFutbol },
                    success: function() {
                        $("#nombreFutbol").val("");
                        $("#comentarioFutbol").val("");
                        $("#comentariosFutbol").load("mostrar_comentarios_futbol.php");
                    }
                });
            });
        });
    </script>
</html>