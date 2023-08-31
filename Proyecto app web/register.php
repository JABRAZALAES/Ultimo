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
            list($storedUsername, $storedPassword) = explode(":", $line);

            if ($storedUsername === $username) {
                $error = "El usuario ya está registrado";
                break;
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

<!DOCTYPE html>
<html>
<head>
    <title>Resultado del registro</title>
</head>
<body>
    <?php if (isset($error)) { ?>
        <p>Error: <?php echo $error; ?></p>
    <?php } elseif (isset($success)) { ?>
        <p>Éxito: <?php echo $success; ?></p>
    <?php } ?>
    <a href="register.html">Volver al formulario de registro</a>
</body>
</html>
