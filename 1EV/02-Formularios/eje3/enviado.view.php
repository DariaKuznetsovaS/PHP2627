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
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-color: #f2f2f2;
        font-family: Arial, sans-serif;
    }

    h3 {
        margin-bottom: 20px;
    }

    table {
        border-collapse: collapse;
        background-color: white;
        box-shadow: 0 2px 10px #ccc;
    }

    th, td {
        padding: 12px 20px;
        border: 1px solid teal;
        text-align: left;
    }

    th {
        background-color: teal;
        color: white;
    }

    td {
        max-width: 300px;
        word-break: break-word;
    }
</style>

</head>

<body>

<h3>Datos recibidos:</h3>

<table>
    <tr>
        <th>Asunto</th>
        <th>Email</th>
        <th>Motivo</th>
        <th>Mensaje</th>
    </tr>


<tr>
    <td><?= $asunto ?></td>
    <td><?= $email ?></td>
    <td><?= $motivo ?></td>
    <td><?= $mensaje ?></td>
</tr>


</table>

</body>
</html>
