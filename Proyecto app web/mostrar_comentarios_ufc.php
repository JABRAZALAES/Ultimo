<?php
$comentariosUFC = file_get_contents("comentarios_ufc.txt");
$comentariosArrayUFC = explode("\n\n", $comentariosUFC);

foreach ($comentariosArrayUFC as $comentarioUFC) {
  if (!empty($comentarioUFC)) {
    $linesUFC = explode("\n", $comentarioUFC);
    $nombreUFC = "";
    $textoComentarioUFC = "";

    foreach ($linesUFC as $lineUFC) {
      if (strpos($lineUFC, "Nombre:") === 0) {
        $nombreUFC = substr($lineUFC, 8);
      } elseif (strpos($lineUFC, "Comentario:") === 0) {
        $textoComentarioUFC = substr($lineUFC, 12);
      }
    }

    if (!empty($nombreUFC) && !empty($textoComentarioUFC)) {
      echo "<div class='comentario'>
              <p><strong>Nombre:</strong> $nombreUFC</p>
              <p><strong>Comentario:</strong> $textoComentarioUFC</p>
            </div><hr>";
    }
  }
}
?>
