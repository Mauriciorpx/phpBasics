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
        <input type="text" name="usuario">
        <br>
        <label for="clave">Clave</label>
        <input type="password" name="clave">
        <br>
        <button type="submit">Entrar</button>

    </form>
</head>
<body>
    
</body>
</html>