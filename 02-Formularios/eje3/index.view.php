<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eje 3</title>
    
</head>
<body>
    
<form method="post" action="enviado.php">

<label for="asunto">Asunto :</label>
<input type="text" name ="asunto" id="asunto">
<br>
<label for="email">Email</label>
<input type="email" name="emai" id="email">
<br>
<select name="motivo">
    <option value="sup">Soporte t&eacutecnico</option>
    <option value="info">Informaci&oacuten de productos</option>
    <option value="queja">Queja</option>
    <option value="otro">Otro</option>
</select>
<br>
<textarea name="mensaje"></textarea>

 <input type="submit" name="Enviar" value="Enviar">
</form>


    
    
</table>
</body>
</html>