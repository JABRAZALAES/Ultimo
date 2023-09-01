<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

  <style>
    .caja {
      border: 1px solid #f9f6f6;
      text-align: center;
    }

    .caja>a {
      color: inherit;
      text-decoration: none;
    }

    footer {
      background-color: #010101;
      color: #ffffff
    }

    .navbar {
      background-color: rgb(3, 3, 3);
    }

    .navbar-nav .nav-link {
      color: black;
    }

    .btn-yellow {
      background-color: yellow;
      color: black;
      /* Text color for the button */
    }

    html,
    nav,
    .navbar-nav,
    .navbar-brand,
    .navbar-expand-lg .navbar-nav .nav-link,
    .navbar-light .navbar-nav .nav-link,
    .navbar-light .navbar-brand,
    .navbar-toggler-icon,
    .navbar-toggler,
    section,
    footer,
    .container {

      font-family: 'Bebas Neue', sans-serif;
    }

    body {
      background-color: #f0f0f0;
    }

    /* Estilos Formulario */
    .custom-title {
      color: black;
      text-shadow: 2px 2px 4px yellow;
      font-size: 32px;
      font-weight: bold;
    }

    body {
      font-family: 'Bebas Neue', sans-serif;
      background-color: #f5f5f5;
    }

    .card {
      background-color: #e2dbdb;
    }

    .custom-card {
      color: rgb(8, 8, 8);
      text-shadow: 2px 2px 4px rgb(249, 249, 2);
      font-size: 54px;
      font-weight: bold;
    }

    .banner-email {
      color: rgb(5, 5, 5);
      text-shadow: 1px 1px 2px yellow;
    }

    /* Estilos adicionales para el formulario */
    .form-group label {
      font-size: 18px;
      font-weight: bold;
      color: black;
    }

    .form-control {
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .btn-primary {
      background-color: black;
      border-color: black;
      color: white;
    }

    .btn-primary:hover {
      background-color: #333;
      border-color: #333;
    }

    .btn-primary {
      background-color: #050505;
      margin: 0%;
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
          <center><a href="formulario.html"><button class="btn btn-primary">Suscríbete</button></a></center>
        </li>
        <br>
        <li class="nav-item ml-2">
          <a href="logout.php" class="btn btn-danger">Cerrar sesión</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container mt-5">
    <div class="row">
      <!-- Parte Izquierda - Formulario -->
      <div class="col-md-6">
        <h3 class="custom-title">Envíanos un mensaje</h3>



        <form action="registro.php" method="post" id="formulario">
          <div class="form-group">
            <label for="nombre" class="custom-title">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" required>
          </div>
          <div class="form-group">
            <label for="apellido" class="custom-title">Apellido</label>
            <input type="text" class="form-control" name="apellido" id="apellido" required>
          </div>
          <div class="form-group">
            <label for="correo" class="custom-title">Correo Electrónico</label>
            <input type="email" class="form-control" name="correo" id="correo" required>
          </div>
          <div class="form-group">
            <label for="telefono" class="custom-title">Número</label>
            <input type="text" class="form-control" name="telefono" id="telefono" required>
            <small class="form-text text-muted">Máximo 10 caracteres.</small>
          </div>
          <div class="form-group">
            <label for="mensaje" class="custom-title">Mensaje</label>
            <textarea class="form-control" name="mensaje" id="mensaje" rows="5" required></textarea>
          </div>
          <button type="button" id="btnEnviar" class="btn btn-primary">Enviar</button>
        </form>

        <div id="ultimaSugerencia">
    Última Sugerencia Enviada:<br>
    <?php
    $archivo = "datosFormulario.txt";
    if (file_exists($archivo)) {
        $lineas = file($archivo);
        if (!empty($lineas)) {
            $ultimaLinea = array_pop($lineas);
            $datos = explode("\n", $ultimaLinea);
            $nombre = $datos[0];
            $mensaje = $datos[4];  // Corrección: usar índice 4 para obtener el mensaje
            echo "Nombre: " . htmlspecialchars($nombre) . "<br>";
            echo "Mensaje: " . htmlspecialchars($mensaje);
        }
    }
    ?>
</div>




      </div>


      <!-- Parte Derecha - Banner -->
      <div class="col-md-6">
        <!-- Aquí puedes agregar el contenido del banner -->
        <div class="card">
          <div class="card-body">
            <center>
              <h5 class="custom-card">MUTANTE SPORT</h5>
              <img src="FOOTER/img/logo_white_large.png" alt="">
              <h5 class="custom-card">Contactos</h5>
              <p>Llámanos: +593 99 820 1714 - Josue Andrés Brazales Cango | +593 98 862 3973 Raul Enrique Faz Intriago |
                +593 99 820 1714 Nicolas Andrés Lara Caicedo | +593 98 862 3973 Edgar Josue Espinoza Zambrano</p>
              <h5 class="custom-card">Escríbenos</h5>
              <p><a href="mailto:jabrazales@espe.edu.ec" class="banner-email">jabrazales@espe.edu.ec</a></p>
              <p><a href="mailto:refaz@espe.edu.ec" class="banner-email">refaz@espe.edu.ec</a></p>
              <p><a href="mailto:nalara@espe.edu.ec" class="banner-email">nalara@espe.edu.ec</a></p>
              <p><a href="mailto:ejespinoza@espe.edu.ec" class="banner-email">ejespinoza@espe.edu.ec</a></p>
            </center>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="col-12 mt-2">
    <div class="row justify-content-around mt-3">
      <div class=" col-lg-2 col-md-4 col-sm-6 col-6">
        <div class="caja m-2">
          <a href="#"><img src="FOOTER/img/facebook.png" width="30px" height="30px"></a>
          <a href="#">
            <p>facebook</p>
          </a>
          <p>@Sport360</p>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 col-6">
        <div class="caja  m-2">
          <a href="#"><img src="FOOTER/img/instagram.png" width="30px" height="30px"></a>
          <a href="#">
            <p>instagram</p>
          </a>
          <p>@Sport360</p>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 col-6">
        <div class="caja  m-2">
          <a href="#"><img src="FOOTER/img/signo-de-twitter.png" width="30px" height="30px"></a>
          <a href="#">
            <p>Twitter</p>
          </a>
          <p>@Sport360</p>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 col-6">
        <div class="caja  m-2">
          <a href="#"><img src="FOOTER/img/tik-tok.png" width="30px" height="30px"></a>
          <a href="#">
            <p>Tiktok</p>
          </a>
          <p>@Sport360</p>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 col-6">
        <div class="caja  m-2">
          <a href="#"><img src="FOOTER/img/youtube.png" width="30px" height="30px"></a>
          <a href="#">
            <p>YouTube</p>
          </a>
          <p>@Sport360</p>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 col-6">
        <div class="caja  m-2">
          <a href="#"><img src="FOOTER/img/tumblr-logo.png" width="30px" height="30px"></a>
          <a href="#">
            <p>Tumblr</p>
          </a>
          <p>@Sport360</p>
        </div>
      </div>
    </div>
    <hr>
    <div class="col-lg-12 col-md 12 col-sm-12 " style="text-align: center;">
      <p>© 2023 Sport360. Todos los derechos reservados.</p>
      <p>Grupo X</p>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
<script>
  $(document).ready(function () {
    $("#btnEnviar").click(function () {
      // Reiniciar los estilos y ocultar mensajes de error
      $(".form-control").removeClass("error");
      $(".error-message").remove();

      // Validar cada campo del formulario y mostrar mensajes de error
      var isValid = true;
      $(".form-control").each(function () {
        if ($(this).val().trim() === "") {
          $(this).addClass("error");
          $(this).after('<small class="form-text text-black error-message">Este campo es obligatorio</small>');
          isValid = false;
        }
      });

      // Si todos los campos están llenos, enviar el formulario
      if (isValid) {
        $("#formulario").submit();
      }
    });
  });
</script>


</html>