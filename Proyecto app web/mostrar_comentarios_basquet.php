<?php
$comentarios = file_get_contents("basquet.txt");
$comentariosArray = explode("\n\n", $comentarios);

foreach ($comentariosArray as $comentario) {
  if (!empty($comentario)) {
    $lines = explode("\n", $comentario);
    $nombre = "";
    $textoComentario = "";

    foreach ($lines as $line) {
      if (strpos($line, "Nombre:") === 0) {
        $nombre = substr($line, 8);
      } elseif (strpos($line, "Comentario:") === 0) {
        $textoComentario = substr($line, 12);
      }
    }

    if (!empty($nombre) && !empty($textoComentario)) {
      echo "<div class='comentario'>
              <p><strong>Nombre:</strong> $nombre</p>
              <p><strong>Comentario:</strong> $textoComentario</p>
            </div><hr>";
    }
  }
}
?>