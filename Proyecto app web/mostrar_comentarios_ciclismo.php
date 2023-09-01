<?php
$comentariosCiclismo = file_get_contents("comentarios_ciclismo.txt");
$comentariosArrayCiclismo = explode("\n\n", $comentariosCiclismo);

foreach ($comentariosArrayCiclismo as $comentarioCiclismo) {
  if (!empty($comentarioCiclismo)) {
    $linesCiclismo = explode("\n", $comentarioCiclismo);
    $nombreCiclismo = "";
    $textoComentarioCiclismo = "";

    foreach ($linesCiclismo as $lineCiclismo) {
      if (strpos($lineCiclismo, "Nombre:") === 0) {
        $nombreCiclismo = substr($lineCiclismo, 8);
      } elseif (strpos($lineCiclismo, "Comentario:") === 0) {
        $textoComentarioCiclismo = substr($lineCiclismo, 12);
      }
    }

    if (!empty($nombreCiclismo) && !empty($textoComentarioCiclismo)) {
      echo "<div class='comentario'>
              <p><strong>Nombre:</strong> $nombreCiclismo</p>
              <p><strong>Comentario:</strong> $textoComentarioCiclismo</p>
            </div><hr>";
    }
  }
}
?>
