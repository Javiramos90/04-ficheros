<?php

function mostrarInfoArchivo($ruta){
    if (!file_exists($ruta)) {
        return "El archivo no existe";
    }
    $info = [];
    // Informacion basica
    $info['nombre'] = basename($ruta);
    $info['ruta'] = realpath($ruta);
    $info['tamagno'] = filesize($ruta). 'bites';
    $info['tipo_mime'] = mime_content_type($ruta);

    // fechas
    $info['fecha_ultimo_acceso'] = date("Y-m-d H:i:s", fileatime($ruta));
    $info['fecha_ultimo_modificacion'] = date("Y-m-d H:i:s", filemtime($ruta));
    $info['fecha_creacion'] = date("Y-m-d H:i:s", filectime($ruta));
    // permisos
    $permisos = fileperms($ruta);
    $info["permisos"] = $permisos;
    $info["permisos_filtrados"] = substr(sprintf('%o',  $permisos), -4);
    $info['md5'] = md5_file($ruta);
    $info['sha1'] = sha1_file($ruta);

    // si es una imagen 
    if (exif_imagetype($ruta)) {
        $imageInfo = getimagesize($ruta);
        $info['dimensiones'] = $imageInfo[0] . ' X ' . $imageInfo[1] . ' Y pixeles';
        $info['tipo'] = $imageInfo['mime'];
    }
    return $info;

}

$rutaArchivo = 'imagenes/loki.gif';
$informacion = mostrarInfoArchivo($rutaArchivo);

echo"<h2>Información del archivo: $rutaArchivo </h2>";

echo"<ul>";


foreach ($informacion as $clave => $valor) {
    echo "<li>$clave : $valor</li>";

}





echo "</ul>";