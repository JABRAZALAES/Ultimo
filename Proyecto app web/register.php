<!DOCTYPE html>
<html>
<head>
    <title>Registrarse</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.google.com/specimen/Kanit" rel="stylesheet">
    <style>
        body {
            background: url('FOOTER/fondo2.png') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Kanit', sans-serif;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 40px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-top: 100px;
        }

        .form-group label {
            font-weight: bold;
        }

        .btn-primary {
            background-color: #ddeb19;
            border-color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
        <center><img src="FOOTER/img/logo_white_large.png" alt="Logo" class="mb-4"></center>
        <h2 class="text-center mb-4">Registrarse</h2>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            $password = $_POST["password"];
            $confirm_password = $_POST["confirm_password"];

            // Verificar si las contraseñas coinciden
            if ($password !== $confirm_password) {
                $error = "Las contraseñas no coinciden";
            } else {
                // Verificar si el usuario ya existe en el archivo
                $file = "users.txt";
                $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

                foreach ($lines as $line) {
                    $parts = explode(":", $line);
                    
                    if (count($parts) >= 2) {
                        $storedUsername = $parts[0];
                        
                        if ($storedUsername === $username) {
                            $error = "El usuario ya está registrado";
                            break;
                        }
                    }
                }
                
                if (!isset($error)) {
                    // Agregar el nuevo usuario al archivo
                    file_put_contents($file, "$username:$password\n", FILE_APPEND);
                    $success = "Usuario registrado exitosamente";
                }
            }
        }
        ?>

        <form action="register.php" method="post">
            <div class="form-group">
                <label for="username">Nombre de usuario:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirmar contraseña:</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
            </div>
            
            <div class="form-group">
                <label for="email">Correo electrónico:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
            <div class="text-center mt-3">
            <a href="logout.php" class="btn btn-primary btn-block">Volver a iniciar sesión</a>
            </div>
        </form>

        <?php if (isset($error)) { ?>
            <div class="alert alert-danger mt-3" role="alert">
                <?php echo $error; ?>
            </div>
        <?php } elseif (isset($success)) { ?>
            <div class="alert alert-success mt-3" role="alert">
                <?php echo $success; ?>
            </div>
        <?php } ?>
    </div>
</body>
</html>
