<?php

    if(!preg_match("/^[a-zA-Z]{3,10}$/", $_POST['usuario'])){
        echo "El usuario no coincide con el formato solicitado";
        exit();
    }

    if(!preg_match("/^[a-zA-Z0-9$@.-]{3,10}$/", $_POST['clave'])){
        echo "La clave no coincide con el formato solicitado";
        
        exit();
        
    }

    if($_POST['usuario']=='carlos' && $_POST['clave']=="1234"){
        session_name("login");
        session_start(); 

        $_SESSION["Nombre"]="Pepito";
        $_SESSION["Apellido"]="Perez";
        $_SESSION["Pais"]="Narnia";
        /* Para usar la funcion header, no pueden habier etiquetas html, salidas en pantalla, o espacios en blanco */
        /* headers_sent() evalua si hay encabezados enviados o salidas de texto*/
        
        if(headers_sent()){
            /* Redireccionamiento con JS */
            echo "<script>window.location.href='contador.php';</script>";
        }else{
            /* Redireccionamiento con  */
            header("Location: contador.php");
        }
    }else{
        echo "Datos incorrectos";
    }