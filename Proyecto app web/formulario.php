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
  <title>Formulario</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="https://fonts.google.com/specimen/Kanit" rel="stylesheet">

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

      font-family: 'Kanit', sans-serif;
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
      font-family: 'Kanit', sans-serif;   
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
        <input type="email" class="form-control" name="correo" id="correo" required
               pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
               title="Ingrese una dirección de correo válida">
    </div>
    <div class="form-group">
        <label for="telefono" class="custom-title">Número</label>
        <input type="text" class="form-control" name="telefono" id="telefono" required
               pattern="\d{10}" title="Ingrese un número de 10 dígitos">
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
        $lineas = file($archivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        if (!empty($lineas)) {
            $ultimaLinea = trim(end($lineas));
            $datos = explode("\n", $ultimaLinea);
            $nombre = '';
            $mensaje = '';

            foreach ($datos as $dato) {
                $partes = explode(": ", $dato);
                if (count($partes) === 2) {
                    $clave = trim($partes[0]);
                    $valor = trim($partes[1]);
                    
                    if ($clave === 'Nombre') {
                        $nombre = htmlspecialchars($valor);
                    } elseif ($clave === 'Mensaje') {
                        $mensaje = htmlspecialchars($valor);
                    }
                }
            }

            if (!empty($nombre)) {
                echo "Nombre: " . $nombre . "<br>";
            }
            if (!empty($mensaje)) {
                echo "Mensaje: " . $mensaje;
            }
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

   <footer class="mt-2">
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
                    <a href="https://instagram.com/mutantesport360?utm_source=qr&igshid=MzNlNGNkZWQ4Mg%3D%3D">
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