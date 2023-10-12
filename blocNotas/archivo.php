<?php
// Verifica si el archivo existe
if (!file_exists($_GET["archivo"])) {
    // Si no existe, lo crea
    $archivo = fopen($_GET["archivo"], "w");
    fclose($archivo);
}

// Abre el archivo
$archivo = fopen($_GET["archivo"], "r");

// Lee el contenido del archivo
$contenido = fread($archivo, filesize($_GET["archivo"]));

// Cierra el archivo
fclose($archivo);

// Muestra el contenido del archivo
echo $contenido;
?>