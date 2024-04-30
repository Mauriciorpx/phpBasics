<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Subir archivos con PHP</h3>
    <form action="carga.php" method="POST" enctype="multipart/form-data">
        <!-- Se puede limitar el formato de los archivos con el parametro accept -->
        <input type="file" name="fichero" id="fichero" accept= ".png, .jpg, .jpeg">
        <br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>