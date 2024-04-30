<?php

    
    /* Para manipular el archivo se hace uso de _FILES */

    $_FILES['fichero']['name']."<br>"; /* Nombre del archivo */
    $_FILES['fichero']['tmp_name']."<br>"; /* Ruta temporal */
    $_FILES['fichero']['type']."<br>";/* Tipo de archivo */
    $_FILES['fichero']['error']."<br>"; /* Errores de carga */
    $_FILES['fichero']['size']."<br>"; /* Tamaño del archivo */
    /* file_exists() verifica si existe un directorio */
    /* mkdir() crea una carpeta, como primer parametro recibe la ruta y nombre,y el segundo son los permisos 0777 da todos los permisos de escritura y lectura*/
    if(!file_exists("archivos")){
        if(!mkdir("archivos", 0777)){
            echo "Error al crear el directorio";
            exit();
        }
    }

    /* Dar permisos a la carpeta con chmod() */

    chmod('archivos', 0777);

    /* Los MIME types, también conocidos como "media types" o "content types", son cadenas de texto que se envían junto con un archivo para indicar el tipo de archivo, describiendo el formato del contenido */

    if(mime_content_type($_FILES['fichero']['tmp_name'])!="image/jpeg" && mime_content_type($_FILES['fichero']['tmp_name'])!="image/png" ){
        echo "El tipo de archivo no es permitido";
    }

    /* limitar el tamaño del archivo a cargar */

    if($_FILES['fichero']['size']/1024>3072){
        echo "El tamaño del archivo es muy grande";
    }

    /* Logica para mover el archivo a la carpeta. move_uploaded_file recibe la ubicacion temporal como primer parametro y el segundo, la ruta y el nombre del archivo*/

    if(move_uploaded_file($_FILES['fichero']['tmp_name'],"archivos/".$_FILES['fichero']['name'])){
        echo "Archivo subido con exito";
    }else{
        echo "Error al subir al archivo";
    }