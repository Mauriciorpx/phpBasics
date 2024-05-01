<?php 
    session_name("login");
    /* session_id("php"); */
    session_start(); 
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <form action="login.php" method="POST">
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" pattern="[a-zA-Z]{3,10}" maxlength="10">
        <br>
        <label for="clave">Clave</label>
        <input type="password" name="clave" pattern="[a-zA-Z0-9$@.-]{3,10}" maxlength="30">
        <br>
        <button type="submit">Entrar</button>

    </form>
</head>
<body>
    
</body>
</html>