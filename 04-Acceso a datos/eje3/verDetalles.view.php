<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eje 6</title>
    <style>
        *{
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }
        body{  
            width: 1000px;
            display: flex;
            justify-content: center;
        }
    
        table{
            border: dotted lightblue .1rem;
            width: 600px;
            height: 400px;
        }

        form{
            width: 400px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 1rem;
            padding: 2rem;
        }
        form input, select, textarea{
            width: 300px;
            background-color: lightblue;
        }
        input[type="submit"]{
            padding: 1rem;
            background-color: teal;
            color: white;
            font-weight: bold;
        }
    </style>
</head>
<body>
 
<div class="tabla">
<table>
    <thead>
        <tr>
            <th>DNI</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Opciones</th>
        </tr>
    </thead>

<tbody>
<?php foreach($listaEmpleados as $empleado) :?>
<tr>
    <td><?=$empleado["dni"]?></td>
    <td><?=$empleado["nombre"]?></td>
    <td><?=$empleado["apellidos"]?></td>
    <td><a href="index.php?accion=verDetalles&dni=
    <?=$empleado["dni"]?>">Ver detalles</a> |
    <a href="index.php?accion=eliminar&dni=<?=$empleado["dni"]?>">
        (Eliminar)</a>
</tr>

<?php endforeach; ?>
</tbody>

</table>
<p>*Opción secreta: <a href="index.php?accion=vaciar">Vaciar lista</a></p>
</div>





</body>
</html>