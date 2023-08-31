<!DOCTYPE html>
<html>
<head>
    <title>Iniciar sesión</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            padding: 0;
            background: url('FOOTER/fondo2.png') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Bebas Neue', sans-serif; /* Aplica la fuente de Google */
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .card {
            background: rgba(255, 255, 255, 0.9);
        }

        .btn-yellow {
            background-color: rgb(242, 242, 38);
            color: black;
        }
        .btn-link{
            color: black;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <!-- Agrega aquí el logo de tu página -->
                <center><img src="FOOTER/img/logo_white_large.png" alt="Logo"></center>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="username">Nombre de usuario:</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $username = $_POST["username"];
                            $password = $_POST["password"];

                            $file = "users.txt"; // Ruta al archivo de texto

                            // Leer el archivo línea por línea
                            $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

                            $validCredentials = false;

                            foreach ($lines as $line) {
                                list($storedUsername, $storedPassword) = explode(":", $line);

                                if ($storedUsername === $username && $storedPassword === $password) {
                                    $validCredentials = true;
                                    break;
                                }
                            }

                            if ($validCredentials) {
                                session_start();
                                $_SESSION["username"] = $username;
                                header("Location: dashboard.php");
                                exit();
                            } else {
                                echo '<div class="alert alert-danger" role="alert">Credenciales incorrectas</div>';
                            }
                        }
                    ?>
                    <button type="submit" class="btn btn-yellow">Iniciar sesión</button>
                </form>
                <div class="mt-3">
                    <a href="register.html" class="btn btn-link">¿No tienes una cuenta? Regístrate aquí</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
