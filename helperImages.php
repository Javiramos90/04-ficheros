<?php
function esImagen($directorio, $ruta){
    $rutaCompleta = $directorio . $ruta;
    $extension = strtolower(pathinfo($rutaCompleta, PATHINFO_EXTENSION));
    $tiposImagen = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'webp', 'svg'];
    return in_array($extension, $tiposImagen);
}
// function esImagenValida($tmpName) {

//     $validImageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'webp', 'svg'];

//     $imagenInfo = getimagesize($tmpName);
//     if (!$imagenInfo) {
//         return false;
//     }

// }