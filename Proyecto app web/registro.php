<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Procesa los datos como lo necesites
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $mensaje = $_POST["mensaje"];

    $datos = "Nombre: $nombre\nApellido: $apellido\nCorreo: $correo\nTeléfono: $telefono\nMensaje: $mensaje\n\n";

    $archivo = "datosFormulario.txt";

    if (file_put_contents($archivo, $datos, FILE_APPEND)) {
        echo "Los datos se han guardado correctamente en el archivo.";
    } else {
        echo "Hubo un error al intentar guardar los datos.";
    }
    
    // Redirige a la página formulario.html después de procesar los datos
    header("Location: formulario.php");
    exit(); // Asegura que el script de PHP se detenga
}
?>