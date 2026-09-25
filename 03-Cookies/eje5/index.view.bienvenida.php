<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eje 1</title>
    <style>
        h3{
            color: pink;
        }

    </style>
</head>
<body>
    
<form method="post" action="index.php">
<h3>Bienvenid@, <?=$user ?></h3>
<!--<a href="index.php?accion=borrar"> Cerrar sesión</a> -->

<input type="submit" value="Cerrar sesión" name="borrar">
</form>
</body>
</html>