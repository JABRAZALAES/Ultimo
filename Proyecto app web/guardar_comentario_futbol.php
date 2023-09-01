<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombreFutbol = $_POST["nombreFutbol"];
    $comentarioFutbol = $_POST["comentarioFutbol"];
    
    $contenidoFutbol = "Nombre: " . $nombreFutbol . "\nComentario: " . $comentarioFutbol . "\n\n";
    
    file_put_contents("comentarios_futbol.txt", $contenidoFutbol, FILE_APPEND);
}
?>