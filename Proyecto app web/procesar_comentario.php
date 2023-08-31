<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $username = $_POST["username"];
  $comment = $_POST["comment"];
  
  $formattedComment = "<strong>$username:</strong> $comment<br>";

  // Abre el archivo para escritura (modo append)
  $file = fopen("comentarios.txt", "a");

  if ($file) {
    fwrite($file, $formattedComment);
    fclose($file);
    echo "Comentario enviado correctamente.";
  } else {
    echo "Error al enviar el comentario.";
  }
}
?>