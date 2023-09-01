<?php
$comentarios = file_get_contents("comentarios.txt");
$comentariosArray = explode("\n\n", $comentarios);

foreach ($comentariosArray as $comentario) {
  $lineas = explode("\n", $comentario);
  if (count($lineas) >= 2) {
    $nombre = $lineas[0];
    $textoComentario = $lineas[1];

    echo "<div class='comentario'>
            <p><strong>$nombre</strong></p>
            <p>$textoComentario</p>
          </div><hr>";
  }
}
?>