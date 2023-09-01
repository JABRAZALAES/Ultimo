<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST["nombre"];
  $comentario = $_POST["comentario"];
  
  $contenido = "Nombre: $nombre\n";
  $contenido .= "Comentario:\n$comentario\n\n";
  
  file_put_contents("basquet.txt", $contenido, FILE_APPEND);
}
?>