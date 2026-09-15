<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eje 26</title>
</head>
<body>

<ul>
    <?php do { ?> <!-- Aquí se tienen que usar llaves y no : porque da error -->
        <li><?= $marcas[$x] ?></li>
        <?php $x++; ?>
    <?php } while($x < count($marcas)); ?>
</ul>
    
</body>
</html>