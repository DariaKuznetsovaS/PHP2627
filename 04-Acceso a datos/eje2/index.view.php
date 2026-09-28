<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eje 6</title>
    <style>
        
    </style>
</head>
<body>
    
<h3>Lista de compra:</h3>

<ul>
<?php foreach($listaCompra as $producto) :?>

<li>
    <?=$producto["nombre"]?>
    <a href="index.php?accion=eliminar&id=<?=$producto["ID"]?>">
        (Eliminar)
    </a>
</li>

<?php endforeach; ?>
</ul>

<h3>Añadir elemento:</h3>
<form action="index.php" method="post">
<input type="text" name="producto"><input type="submit" value="Añadir">

</form>

</body>
</html>