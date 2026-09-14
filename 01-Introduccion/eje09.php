<!DOCTYPE html>
<html>
    <head>
        <title>Eje 5</title>
    </head>
    <body>
<?php
$cadena1=$_GET["cadena1"];
$cadena2=$_GET["cadena2"];
concatenar($cadena1, $cadena2);

function concatenar($cadena1, $cadena2){
echo $cadena1 . $cadena2;
}

?>
</body>
</html>