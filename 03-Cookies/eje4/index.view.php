<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eje 1</title>
    <style>
        body{
            display: flex;
            justify-content: center;
        }
        input{
            background-color: lightblue;
            color: purple;
            padding: .5rem;
        }

    </style>
</head>
<body>
    

<form method="get" action="index.php">

<h3>Lista de asistentes:</h3>

<ul>
<?php foreach($asistentes as $asistente): ?>
    <li><?= $asistente ?> </li>
<?php endforeach; ?>
</ul>


<label for="nombre">Añadir asistente</label>
<input type="text" name="nombre" id="nombre">
<input type="submit" value="Guardar">

<input type="reset" value="Vaciar lista" name="borrar">

</form>

</body>
</html>