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
    

<form method="post" action="index.php">
<p>Idioma: <?=$idioma_cookie ?></p>
<label for="idioma">Introduce el nombre de usuario que deseas almacenar</label>
<select name="idioma" id="idioma">
        <option value="es">Castellano</option>
        <option value="eus">Euskera</option>
</select>
<input type="submit" value="Guardar">

</form>

</body>
</html>