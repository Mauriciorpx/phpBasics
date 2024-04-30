<?php
    $x = 7;
    $y = 10;
    $w = 7;
    $z = 9;


    $resultado = match($x){
        
        $y=> "Valor igual a y",
        7=> "Valor igual a 7",
        $z=> "Valor igual a z",
        default => "No coincide con ninguna variable"
    };

    echo $resultado;