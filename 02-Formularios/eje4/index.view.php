<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eje 4</title>

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
        background-color: teal;
        color: white;
        border: none;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: purple;
    }
</style>


</head>

<body>

<form method="post" action="index.php">

<label for="user">Usuario:</label>
<input type="text" name="user" id="user">

<label for="pass">Email:</label>
<input type="password" name="pass" id="pass">


<input type="submit" name="Enviar" value="Enviar">


</form>

</body>
</html>
