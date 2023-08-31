<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
}
?>
