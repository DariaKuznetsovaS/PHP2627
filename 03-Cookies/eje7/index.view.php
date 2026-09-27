<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eje 6</title>
    <style>
        form{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            gap: 1rem;
            border: dotted pink 1px;
            width: 60%;
            margin: 0 auto;
            background-color: lightblue;
            font-weight: bold;
        }
    
        input[type="submit"]{
            width: 10%;
            background-color: lightyellow;
            font-weight: bold;
            margin: 1rem;
        }
        input[type="text"], input[type="password"]{
            width: 20%;
            background-color: pink;
            padding: .3rem;
        }
        form > *, form{
            border-radius: 1rem;
        }

    </style>
</head>
<body>
    
    <div class="cesta">
        <h3>Cesta de la compra</h3>
        <p>La cesta está vacía</p>
    </div>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripci$oacuten</th>
                <th>Precio</th>
                <th>Cantidad</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($productos as $id => $p): ?>
            <tr>
                <td><?=$p["nombre"]?></td> 
                <td><?=$p["desc"]?></td>
                <td><?=$p["precio"]?></td>
                <!--EL ID en el link directamente: -->
                <td><a href="index.php?accion=annadir&idProducto=<?= $id ?>">Comprar </a> </td>     
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>



</body>
</html>