<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $file = "users.txt"; // Ruta al archivo de texto

    // Leer el archivo línea por línea
    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($lines as $line) {
        list($storedUsername, $storedPassword) = explode(":", $line);

        if ($storedUsername === $username && $storedPassword === $password) {
            $_SESSION["username"] = $username;
            header("Location: dashboard.php");
            exit();
        }
    }

    $error = "Credenciales incorrectas";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Error de inicio de sesión</title>
</head>
<body>
    <p><?php echo $error ?? ''; ?></p>
    <a href="login.html">Volver al formulario de inicio de sesión</a>
</body>
</html>
