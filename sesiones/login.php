<?php


    if($_POST['usuario']=='carlos' && $_POST['clave']=="1234"){
        session_name("login");
        session_start(); 

        $_SESSION["Nombre"]="Pepito";
        $_SESSION["Apellido"]="Perez";
        $_SESSION["Pais"]="Narnia";

        echo "Sesion Iniciada";
    }else{
        echo "Datos incorrectos";
    }