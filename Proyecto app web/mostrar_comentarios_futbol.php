    <?php
    $comentariosFutbol = file_get_contents("comentarios_futbol.txt");
    $comentariosArrayFutbol = explode("\n\n", $comentariosFutbol);

    foreach ($comentariosArrayFutbol as $comentarioFutbol) {
        if (!empty($comentarioFutbol)) {
            $linesFutbol = explode("\n", $comentarioFutbol);
            $nombreFutbol = "";
            $textoComentarioFutbol = "";

            foreach ($linesFutbol as $lineFutbol) {
                if (strpos($lineFutbol, "Nombre:") === 0) {
                    $nombreFutbol = substr($lineFutbol, 8);
                } elseif (strpos($lineFutbol, "Comentario:") === 0) {
                    $textoComentarioFutbol = substr($lineFutbol, 12);
                }
            }

            if (!empty($nombreFutbol) && !empty($textoComentarioFutbol)) {
                echo "<div class='comentarioFutbol'>
                        <p><strong>Nombre:</strong> $nombreFutbol</p>
                        <p><strong>Comentario:</strong> $textoComentarioFutbol</p>
                      </div><hr>";
            }
        }
    }
    ?>
</div>
