<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eje 1</title>
    <style>
        form{
            display: flex;
            align-items: center;
            flex-direction: column;
            gap: 1rem;
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
<p><?=$mensaje ?></p>
<label for="nombre">Introduce el nombre de usuario que deseas almacenar</label>
<input type="text" name="user" id="nombre">
<input type="submit" value="Guardar">

<input type="submit" value="Borrar cookie">
</form>

</body>
</html>