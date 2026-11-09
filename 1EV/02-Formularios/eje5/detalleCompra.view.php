<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eje 5</title>

<style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-color: #f2f2f2;
        font-family: Arial, sans-serif;
    }

    h3 {
        margin-bottom: 20px;
    }

    input[type="submit"] {
        margin-top: 10px;
        background-color: teal;
        border-radius: 10px;
        padding: 1em;
        color: white;
        border: none;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: purple;
    }
</style>

</head>

<body>

<h3>Precio total: </h3>
<p>El importe total de la compra realizada es: <?=$importeTotal ?>€ </p> 

<h3>Detalle de la compra</h3>
<ul>
<?php forEach($compra as $articulo): ?>
    <li><?=$articulo["nombre"] ."(".$articulo["cantidad"].")"?></li>
<?php endforeach; ?>
</ul>

<a href="index.php">Volver a la tienda</a>

</body>
</html>
