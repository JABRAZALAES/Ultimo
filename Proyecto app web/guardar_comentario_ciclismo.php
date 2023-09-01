<?php
$nombreCiclismo = $_POST['nombreCiclismo'];
$comentarioCiclismo = $_POST['comentarioCiclismo'];

$contenido = "Nombre: " . $nombreCiclismo . "\nComentario: " . $comentarioCiclismo . "\n\n";
file_put_contents("comentarios_ciclismo.txt", $contenido, FILE_APPEND);
?>
