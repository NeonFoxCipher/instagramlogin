<?php
$file = 'log.txt';

if (file_exists($file)) {
    // Forzar la descarga del archivo
    header('Content-Description: File Transfer');
    header('Content-Type: text/plain'); // Tipo MIME adecuado
    header('Content-Disposition: attachment; filename="log.txt"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));

    // Leer y enviar el contenido del archivo
    readfile($file);
    exit;
} else {
    echo "El archivo no existe.";
}
?>
