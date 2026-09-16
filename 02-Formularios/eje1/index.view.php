<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eje 29</title>
</head>
<body>
    
<form method="post">
<h4>Resultado de la conversión(<?=$temperatura?>):<?= $resultado ?> </h4>
<p>Introduce la temperatura:</p>
<input type="text" name ="temperatura">
<br>
<p>Indica la unidad de la temperatura introducida: </p>
<select name="unidad">
    <option name="ce">Celsius</option>
    <option name="fa">Farenheit</option>
</select>

 <input type="submit" name="Enviar" value="Enviar">
</form>


    
    
</table>
</body>
</html>