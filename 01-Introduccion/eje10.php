<!DOCTYPE html>
<html>
    <head>
        <title>Eje 5</title>
    </head>
    <body>
<?php
$cadena1=$_GET["cadena1"];
$cadena2=$_GET["cadena2"];
echo concatenar($cadena1);

function concatenar($cadena1, $cadena2="Adios"){
return  $cadena1 . $cadena2;
}

?>
</body>
</html>