<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Nueva bodega</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 30px;
        }

        form {
            display: flex;
            flex-direction: column;
            width: 400px;
            padding: 20px;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        label {
            margin-top: 12px;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="date"] {
            padding: 8px;
            border: 1px solid #bbb;
            border-radius: 4px;
        }

        input[type="radio"] {
            margin-right: 5px;
            margin-top: 8px;
        }

        h4 {
            margin-top: 15px;
            margin-bottom: 5px;
        }

        input[type="submit"] {
            margin-top: 20px;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #333;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }

        a {
            color: #2563eb;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <h3>Gestión de bodegas</h3>

    <a href="../index.php?accion=volver">Volver</a>

    <form action="../index.php" method="get">

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" placeholder="Nombre">

        <label for="direccion">Dirección</label>
        <input type="text" name="direccion" id="direccion" placeholder="Dirección">

        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Email">

        <label for="telefono">Teléfono</label>
        <input type="text" name="telefono" id="telefono" placeholder="Teléfono">

        <label for="contacto">Persona de contacto</label>
        <input type="text" name="contacto" id="contacto" placeholder="Persona de contacto">

        <label for="fecha">Fecha de fundación</label>
        <input type="date" name="fecha" id="fecha">

        <h4>¿Dispone de restaurante?</h4>
        <label>
            <input type="radio" name="restaurante" value="1"> Sí
        </label>
        <label>
            <input type="radio" name="restaurante" value="0"> No
        </label>

        <h4>¿Dispone de hotel?</h4>
        <label>
            <input type="radio" name="hotel" value="1"> Sí
        </label>
        <label>
            <input type="radio" name="hotel" value="0"> No
        </label>

        <input type="submit" value="Añadir">

        <input type="hidden" name="accion" value="insertNuevaBodega">

    </form>

</body>
</html>