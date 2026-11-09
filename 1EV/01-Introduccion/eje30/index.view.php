<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eje 29</title>
</head>
<body>
    

<ul>
<?php foreach($estudiantes as $e) :?>
    <li>La nota media de <?=$e["nombre"] ?> es: <?=$e["nota"] ?></li>
<?php endforeach; ?>
</ul>
    

</body>
</html>