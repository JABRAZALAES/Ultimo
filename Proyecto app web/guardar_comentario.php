<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST["nombre"];
  $comentario = $_POST["comentario"];
  
  $contenido = "Nombre: $nombre\n";
  $contenido .= "Comentario: $comentario\n\n";
  
  file_put_contents("comentarios.txt", $contenido, FILE_APPEND);
}
?>