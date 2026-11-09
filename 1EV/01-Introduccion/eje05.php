<!DOCTYPE html>
<html>
    <head>
        <title>Eje 5</title>
    </head>
    <body>
<?php
$a=$_GET["a"];
$b=$_GET["b"];

$resta=$a-$b;
$division=$a/$b;
$amayorb=$a>$b;
$amenorb=$a<$b;
echo "Resta: $resta <br>";
echo "División: $division <br>";
echo "Es A mayor que B?" . var_export($amayorb). "<br>";
echo "Es A menor que B?" . var_export($amenorb);


?>
</body>
</html>