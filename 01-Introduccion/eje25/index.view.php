<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eje 23</title>
</head>
<body>
    
<ul>
<?php while($x<count($lista)): ?>
    <li><?= $lista[$x] ?></li>
<?php $x++; ?>
<?php endwhile; ?>    
</ul>
</body>
</html>