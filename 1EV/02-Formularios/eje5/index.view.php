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

    table {
        border-collapse: collapse;
        background-color: white;
        box-shadow: 0 2px 10px #ccc;
    }

    th, td {
        padding: 12px 20px;
        border: 1px solid teal;
        text-align: left;
    }

    th {
        background-color: teal;
        color: white;
    }

    td {
        max-width: 300px;
        word-break: break-word;
    }
    
    input[type="submit"] {
        margin-top: 10px;
        background-color: teal;
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
<form action="index.php" method="post">
<table>
    <tr>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Precio</th>
        <th>Cantidad</th>
    </tr>



    <?php foreach($articulos as $id=> $articulo): ?>
    <tr>
        <td><?=$articulo["nombre"] ?></td>
        <td><?=$articulo["desc"] ?></td>
        <td><?=$articulo["precio"] ?></td>
        <td><input type="number" name="cantidad[<?=$id ?>]" value="0"></td>
    </tr>
    <?php endforeach; ?>



</table>
<input type="submit" value="Comprar">
</form>
</body>
</html>
