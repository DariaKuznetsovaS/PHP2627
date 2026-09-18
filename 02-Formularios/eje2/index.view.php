<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eje 2</title>
</head>
<body>
    
<form method="get" action="index.php">
    <?php if(isset($resultado)): ?>
<h4>Último resultado:<?= $resultado ?> </h4>
    <?php endif; ?>
<label for="primero">Primer número:</label>
<input type="text" name ="primero" id="primero">
<br>
<label for="segundo">Segundo número</label>
<input type="text" name="segundo" id="segundo">
<select name="operacion">
    <option value="suma">Sumar</option>
    <option value="resta">Restar</option>
    <option value="multi">Multiplicar</option>
    <option value="divi">Dividir</option>
</select>

 <input type="submit" name="Enviar" value="Enviar">
</form>


    
    
</table>
</body>
</html>