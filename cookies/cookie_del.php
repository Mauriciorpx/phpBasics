<?php 
    /* setcookie("Nombre", valor, expiracion, dir, dominio, secure, httponly ) */
    /* Para eliminar una cookie, se le pasa un tiempo negativo (pasado) */
    setcookie("Idioma", "es", time()-60,"/", "localhost", false, true);
