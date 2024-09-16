<?php
require 'helperImages.php';
/**
 * Mostrar una lista de los archivos que hay en un directorio
 */
// directorio que queremos escanear
$directorio = 'imagenes/';

// comprobar si un archivo es una imagen
// function esImagen($directorio, $ruta){
//     $rutaCompleta = $directorio . $ruta;
//     $tipoMime = mime_content_type($rutaCompleta);
//     // $tiposImagen = ['gif', 'png', 'jpeg'];
//     echo''.$rutaCompleta.''.$tipoMime.'';
//     return strpos($tipoMime,'image/') === 0;
// }


// function para mostrar las imagenes 
function mostrarImagen($directorio, $imagen){
    echo "<img src= '$directorio$imagen' alt= 'Imagen de prueba' width='200px'>";
}

// comprobamos di el directorio existe
if(is_dir($directorio)){
    // el directorio existe
    if($dh= opendir($directorio)){
        echo "<h1>Archivos de imagen en el directorio $directorio</h1>";
        echo "<ul>";

        // leemos cada entradda del directorio
        while(($archivo=readdir($dh)) !== false){
            if($archivo != "," && $archivo != ".."){
            if(esImagen($directorio, $archivo)){
                echo "<li>$archivo</li>";
                echo "<li>";
                mostrarImagen($directorio ,$archivo);
                echo"</li>";

            }


        }

    }
        echo "</ul>";
    
}else{
    // el directorio no existe
    echo"El directorio $directorio no existe";
}
}
?>