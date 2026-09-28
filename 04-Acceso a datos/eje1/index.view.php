<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eje 6</title>
    <style>
        form{
            display: flex;
            flex-direction: column;
            width: 30%;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <form action="index.php" method="get">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre">

    <label for="apellidos">Apellidos:</label>
    <input type="text" name="apellidos" id="apellidos">

    <input type="submit" value="Enviar">
    </form>
    <h3>Resultado de la consulta:</h3>
   <p>La alumna: <?= $alumno["nombre"] ?> <?= $alumno["apellidos"]?> 
   encontrada en la BD </p> 



</body>
</html>