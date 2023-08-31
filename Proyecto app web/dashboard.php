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
         .navbar-brand {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            margin: 0 auto; /* Añade este margen para centrar el logo horizontalmente */
        }
        .caja {
            border: 1px solid #ffffff;
            text-align: center;
        }
        .container1 {
            
            font-family: 'Bebas Neue', sans-serif;
            color: black;
      text-shadow: 2px 2px yellow;
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

        .cuadro {
            margin-bottom: 20px;
        }

      
        .uno, .dos, .tres, .cuatro {
            flex-basis: calc(50% - 20px);
            padding: 20px;
            border-radius: 5px;
            background-color: #f8f9fa;
            margin-bottom: 20px;
            text-align: center;
        }

        .uno, .dos, .tres, .cuatro img {
            max-width: 20%;
            height: auto;
        }
        .navbar {
            background-color: black; /* Cambia el color de fondo del navbar a negro */
            margin-bottom: 0; /* Quita el margen inferior del navbar */
        }

        .container1 {
    max-width: 800px;
    margin: 0 auto;
    padding: 50px;
    background-color: black; /* Fondo negro */
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    margin-top: 20px;
    margin-bottom: 20px;
    color: white; /* Texto en color blanco */
}

       /* Estilos para los botones */
       .btn-primary {
            background-color: yellow;
            color: black;
            border-color: yellow;
        }
        
        .cuatro img {
    max-width: 100%; /* Cambia el valor a tu preferencia, por ejemplo: 300px */
    height: auto;
    object-fit: cover;
    margin-top: 20px;
}
body, html {
            background: url('FOOTER/fondo2.png') no-repeat center center fixed;
            font-family: 'Bebas Neue', sans-serif;
           
        }

    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark badge-dark">
            <a class="navbar-brand" href="#"><img src="FOOTER/img/logo_white_large.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </header>

    <div class="container1">
    <h1 class="text-center">Bienvenido, <?php echo $_SESSION["username"]; ?></h1>
    <h2 class="text-center">¿Qué noticias deseas ver hoy?</h2>
    <div class="row">
        <div class="col-md-6">
            <div class="cuatro">
                <a href="Basquet.html" class="btn btn-primary">Basquet</a>
                <br>
                <img src="FOOTER\32858-baloncesto.jpg" alt="Basquet" width="500">
            </div>
            <div class="cuatro">
                <a href="Futbol.html" class="btn btn-primary">Fútbol</a>
                <br>
                <img src="FOOTER/mejor.jpg" alt="Fútbol" width="500">
            </div>
        </div>
        <div class="col-md-6">
            <div class="cuatro">
                <a href="UFC.html" class="btn btn-primary">UFC</a>
                <br>
                <img src="FOOTER\UFC.jpg" alt="UFC" width="500">
            </div>
            <div class="cuatro">
                <a href="ciclismo.html" class="btn btn-primary">Ciclismo</a>
                <br>
                <img src="FOOTER\bicicletas.jpg" alt="Ciclismo" width="500">
            </div>
        </div>
    </div>
    <div class="text-center mt-4">
        <a href="logout.php" class="btn btn-danger">Cerrar sesión</a>
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
            <p class="text-center">© 2023 Sport360. Todos los derechos reservados.</p>
            <p class="text-center">Grupo X</p>
          </div>
        </div>
      </div>
    </footer>
</body>

</html>
</body>

</html>

