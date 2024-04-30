<?php
    //Usado antes:
    $clave = "holaMundo";
    //echo md5($clave)."<br>";
    //echo sha1($clave)."<br>";
    //Soporta diferentes algoritmos
   // echo hash("md5", $clave)."<br>";

    //Algoritmos soportados por hash:

    /* foreach(hash_algos() as $algoritmos){
        echo $algoritmos."--".hash($algoritmos, $clave)."<br>";
    } */

    //Mas recomendable, ya que siempre se genera una encriptacion diferente
    //echo password_hash($clave,PASSWORD_DEFAULT)."<br>";
    //echo password_hash($clave,PASSWORD_BCRYPT)."<br>";
    //se puede establecer cuantas veces se aplica el algoritmo, por defecto el valor es 10
    //echo password_hash($clave,PASSWORD_BCRYPT, ["cost"=>11])."<br>";
    //Comparar una funcion hasheada con una ingresada por el usuario:
    $clave_hasheada = password_hash($clave,PASSWORD_BCRYPT, ["cost"=>11]);

    var_dump(password_verify($clave,$clave_hasheada));

    if(password_verify($clave,$clave_hasheada)):
        echo "Las claves son iguales";
    else:
        echo "las claves son diferentes";
    endif;

    $claveNoHasheada = "miContraseñaSegura";
    $hash = password_hash($claveNoHasheada, PASSWORD_DEFAULT);
if (password_verify($claveNoHasheada, $hash)) {
    echo "La clave es correcta.";
} else {
    echo "La clave es incorrecta.";
}