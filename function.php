<?php  
    function saludo($nombre){
        return "Hola ".$nombre."<br>";
    }

    $saludo = saludo("David");
    echo $saludo;
    
    