<?php
    $numero = NULL;
    /* unset() elimina una variable dada */
    /* empty() evalua si la variable está vacia */
    /* La función isset() en PHP se utiliza para determinar si una variable está definida y no es NULL. */
    if(is_null($numero)){
        echo "El numero es nulo";
    }else{
        echo "No es nula";
    }