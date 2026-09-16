<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eje 29</title>
</head>
<body>
    

<ul>
<li>El array generado es: <?php foreach($arrayGenerado as $a): ?>
    <?= $a ?>
    <?php endforeach; ?>
</li>
<li>El valor más bajo del array es: <?= $valorBajo?></li>
<li>El valor más alto del array es: <?= $valorAlto?></li>

</ul>
    

</body>
</html>