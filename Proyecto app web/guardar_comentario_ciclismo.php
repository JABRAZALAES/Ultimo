<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nombreCiclismo = $_POST["nombreCiclismo"];
        $comentarioCiclismo = $_POST["comentarioCiclismo"];

        $contenidoCiclismo = "Nombre: " . $nombreCiclismo . "\nComentario: " . $comentarioCiclismo . "\n\n";

        file_put_contents("comentarios_ciclismo.txt", $contenidoCiclismo, FILE_APPEND);
}
?>
