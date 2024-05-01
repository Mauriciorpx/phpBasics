<?php
    session_name("login");
    session_start(); 

    session_destroy();

    /* otra opcion session_unset() */
    /* Redireccionamiento con JS */
    if(headers_sent()){
        /* Redireccionamiento con JS */
        echo "<script>window.location.href='index.php';</script>";
    }else{
        /* Redireccionamiento con  */
        header("Location: index.php");
    }

    