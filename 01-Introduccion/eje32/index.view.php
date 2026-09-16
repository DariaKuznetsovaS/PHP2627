<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eje 29</title>
</head>
<body>
    
<table border="1">
    <tr>
        <th>Nombre</th>
        <th>Primera Evaluación</th>
        <th>Segunda Evaluación</th>
        <th>Nota Final</th>
    </tr>
    
        <?php forEach($agenda as $a) :?>
        
            <tr>
                <?php if($a<5) : ?>
                <td style="color: red;"><?= $a ?></td>
                
            <?php endif; ?>
            <td><?=$a["nombre"] ?></td>
            <td><?=$a["nota1"]?></td>
            <td><?=$a["nota2"]?></td>
            <td><?=$a["media"]?></td>
            </tr>
            
        <?php endforeach; ?>

    
    
</table>
</body>
</html>