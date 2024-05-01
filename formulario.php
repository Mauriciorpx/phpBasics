<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="indexFormulario" method="POST">
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre">
        </div>
        
        <br>

        <!-- Select unico -->
        <!-- <label for="asignatura">Asignatura</label>
        <select name="asignatura" id="asignatura">
            <option value="Ingles">Ingles</option>
            <option value="Matematica">Matematica</option>
            <option value="Ciencia">Ciencia</option>
            <option value="Lenguaje">Lenguaje</option>
        </select> -->

        <br>

        <!-- Select Multiple -->
        <label for="asignatura">Asignatura</label>
        <br>
        <select name="asignatura[]" id="asignatura" Multiple>
            <option value="Ingles">Ingles</option>
            <option value="Matematica">Matematica</option>
            <option value="Ciencia">Ciencia</option>
            <option value="Lenguaje">Lenguaje</option>
        </select>

        <br><br>
        <!-- El value es el valor que se manda al enviar el formulario -->
        <label for="opcion-1">
            <input type="checkbox" value="Manzana" id="opcion-1" name= "frutas[]">
            Manzana
        </label>
        <label for="opcion-2">
            <input type="checkbox" value="Pera" id="opcion-2" name= "frutas[]">
            Pera
        </label>
        <label for="opcion-3">
            <input type="checkbox" value="Fresa" id="opcion-3" name= "frutas[]">
            Fresa
        </label>
        <br><br><br>

        <button type="submit">Enviar</button>
        

    </form>
</body>
</html>