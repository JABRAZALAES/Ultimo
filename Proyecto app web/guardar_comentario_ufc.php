<?php
$nombreUFC = $_POST['nombreUFC'];
$comentarioUFC = $_POST['comentarioUFC'];

$contenido = "Nombre: " . $nombreUFC . "\nComentario: " . $comentarioUFC . "\n\n";
file_put_contents("comentarios_ufc.txt", $contenido, FILE_APPEND);
?>