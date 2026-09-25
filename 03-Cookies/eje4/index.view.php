<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eje 1</title>
    <style>
        form{
            display: flex;
           gap: 1rem;
        
            flex-direction: column;
            
        }
    
        input[type="submit"]{
            width: 10%;
            background-color: lightblue;
            padding: .5rem;
            font-weight: bold;
        }
        input[type="text"]{
            width: 20%;
            background-color: pink;
            padding: .3rem;
        }

    </style>
</head>
<body>
    

<form method="get" action="index.php">

<h3>Lista de asistentes:</h3>
    
<ul>
    <?php if(count($asistentes)>0) :?>
        <p>Hay asistentes:</p>
        <?php foreach($asistentes as $asistente): ?>
    <li><?= $asistente ?> </li>
<?php endforeach; ?>
    <?php else: ?>
        <p>No hay asistentes</p>
    <?php endif; ?>

</ul>


<label for="nombre">Añadir asistente</label>
<input type="text" name="nombre" id="nombre">
<input type="submit" value="Guardar">

<input type="submit" value="Vaciar lista" name="borrar">

</form>

</body>
</html>