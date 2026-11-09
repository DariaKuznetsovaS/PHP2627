<!DOCTYPE html>
<html>
    <head>
        <title>Eje 5</title>
    </head>
    <body>
<?php
$a=$_GET["a"];
$b=$_GET["b"];

$resultado=multiplicar($a, $b);
echo "El resultado de la multiplicación de $a por $b es:  $resultado";

function multiplicar($a, $b){
return $a*$b;
}

?>
</body>
</html>