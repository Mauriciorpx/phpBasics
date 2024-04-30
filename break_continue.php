<?php
    /* $c =1;
    while($c<=20){
        echo $c.'<br>';
        $c++;
        if($c==10):
            break;
        endif;
        
    }  */

    $pc = ["SO", "SSD", "GPU", "RAM", "CPU"];

    foreach($pc as $valor){
        
        if($valor=="GPU"){
            continue;
        }
        echo $valor."<br>";
    }