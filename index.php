<?php
    //Se capturan los datos del input mediante el identificador "name"
   $nombre = $_POST['nombre'];
   $asignatura = $_POST['asignatura'];
   $frutas = $_POST['frutas'];

   echo $nombre."-".$asignatura."-".$frutas;