<?php
if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["action"]) && $_GET["action"] === "abrir") {
    $nombre_archivo = "contenido.txt";
    if (file_exists($nombre_archivo)) {
        $contenido = file_get_contents($nombre_archivo);
        echo $contenido;
    }
} elseif ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["action"]) && $_POST["action"] === "guardar") {
    $contenido = $_POST["contenido"];
    $nombre_archivo = "contenido.txt";
    if (file_put_contents($nombre_archivo, $contenido)) {
        echo "Archivo guardado con éxito";
    } else {
        echo "Error en la operación";
    }
}
?>
