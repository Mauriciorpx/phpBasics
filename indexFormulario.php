<?php
    //Se capturan los datos del input mediante el identificador "name"
    //Se usa el metodo post, ya que este no envia los datos a la URL, mientras que GET si lo hace
   /* $nombre = $_POST['nombre'];
   $asignatura = $_POST['asignatura'];
   $frutas = $_POST['frutas']; 

   echo $nombre."-".$asignatura."-".$frutas; 
    $materias = $_POST['asignatura'];
   foreach($materias as $materia ){
    echo $materia."<br>";
   } */

   echo "<br>";
   echo "<br>";
   echo "<br>";
   
   $fresa = $_POST['frutas'];

   foreach($fresa as $frutas ){
    echo $frutas."<br>";
   }