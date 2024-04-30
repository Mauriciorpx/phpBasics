<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional HTML5</title>
</head>
<body>
    <?php if(9>8): ?>
        <h1>Expresion Verdadera</h1>
    <?php endif; ?>

    <!-- Otra forma -->
    <?php if(9>8){ ?>
        <h1>Expresion Verdadera</h1>
    <?php } ?>
</body>
</html>