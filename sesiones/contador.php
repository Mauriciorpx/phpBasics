<!-- las sesiones se crean antes del html -->
<?php 
    session_name("login");
    /* session_id("php"); */
    session_start(); 
    /* if(isset($_SESSION['contador'])){
        $_SESSION['contador']++;
    }else{
        $_SESSION['contador'] = 1;
    } */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo "Bienvenido ".$_SESSION['Nombre']."<br>"; ?>
    <br><br>
    <a href="index.php">Inicio</a>
    <br>
    <a href="cerrar.php">Eliminar sesion</a>
</body>
</html>