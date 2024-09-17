<?php

/**
 * comprueba si un archivo en de tipo imagen
 * Los tipos validos son: jpg, gif, jpeg, png, bmp y svg
 * @param string $rutaCompleta la ruta completa del archivo
 * 
 * @return bool indica si el archivo es una imagen o no
 * Summary of esImagen
 */
function esImagen($rutaCompleta){
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