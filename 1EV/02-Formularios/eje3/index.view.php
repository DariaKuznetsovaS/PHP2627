<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eje 3</title>

<style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #f2f2f2;
        font-family: Arial, sans-serif;
    }

    form {
        width: 400px;
        padding: 25px;
        display: flex;
        flex-direction: column;
        gap: 10px;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 2px 10px #ccc;
    }

    label {
        font-weight: bold;
    }

    input, select, textarea {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 14px;
    }

    textarea {
        height: 100px;
        resize: vertical;
    }

    input[type="submit"] {
        margin-top: 10px;
        background-color: #94aedbff;
        color: white;
        border: none;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #2a5bb1ff;
    }
</style>


</head>

<body>

<form method="post" action="index.php">

<label for="asunto">Asunto:</label>
<input type="text" name="asunto" id="asunto">

<label for="email">Email:</label>
<input type="email" name="email" id="email">

<label for="motivo">Motivo:</label>
<select name="motivo" id="motivo">
    <option value="sup">Soporte técnico</option>
    <option value="info">Información de productos</option>
    <option value="queja">Queja</option>
    <option value="otro">Otro</option>
</select>

<label for="mensaje">Mensaje:</label>
<textarea name="mensaje" id="mensaje"></textarea>

<input type="submit" name="Enviar" value="Enviar">


</form>

</body>
</html>
