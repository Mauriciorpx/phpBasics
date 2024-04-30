<?php
    $colores = ["rojo", "azul", "verde", "amarillo"];
    $edades = [
                "Juan" => 25, 
                "María" => 30, 
                "Pedro" => 28, 
                "Ana" => 35
            ];
    
    foreach($colores as $valor){
        echo $valor.'<br>';
    }

    foreach($edades as $clave=> $valor){
        echo $clave.": ".$valor.'<br>';
    }