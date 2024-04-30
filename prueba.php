<?php
    
    $nombre = "Ruperto";
    //echo $nombre;
    define("NOMBRE", "Carlos"); //Metodo antiguo
    const APELLIDO = "Suarez"; //Metodo reciente a partir php 5.3
    /* Arreglos simples */
    $arreglo = ['Arbol', 'Casa', 'Conejo'];

    /* Arreglos asociativos */

    $arregloAsociativo = ["Nombre"=>"David", "Apellido"=>"Jimenez"];
   /*  echo $arregloAsociativo["Apellido"];
    var_dump($arregloAsociativo); */

    //Operadores de comparacion

    var_dump(2<1);
    var_dump(2<1 and 2==2);
    var_dump(2<1 or 2==2);
    var_dump(!(2<1));

    $numeroIncremento = 3;
    $numeroDecremento= 10;


    echo $numeroIncremento++;
    echo $numeroIncremento;