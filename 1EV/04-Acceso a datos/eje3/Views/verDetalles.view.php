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
 
<table>
        <tr>
            <th>DNI</th>
            <td><?=$empleado["dni"]?></td>
        </tr>
        <tr>
            <th>Nombre</th>
            <td><?=$empleado["nombre"]?></td>
        </tr>
        <tr>
            <th>Apellidos</th>
            <td><?=$empleado["apellidos"]?></td>
        </tr>
        <tr>
            <th>Edad</th>
            <td><?=$empleado["edad"] ?></td>
        </tr>
        <tr>
            <th>Sexo</th>
            <td><?=$empleado["sexo"] ?></td>
        </tr>
        <tr>
            <th>Fecha de nacimiento</th>
            <td><?=$empleado["fecha_nac"] ?></td>
        </tr>
        <tr>
            <th>Curriculum</th>
            <td><?=$empleado["curriculum"] ?></td>
        </tr>
   
</table>

</body>
</html>