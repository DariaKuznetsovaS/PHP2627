<!DOCTYPE html>
<html>
    <head>
        <title>Eje 5</title>
    </head>
    <body>
<?php
$a=$_GET["a"];
$b=$_GET["b"];
if($a>$b){
    esMayor($a, $b);
} else{
    echo "A no es mayor que B";
}

function esMayor($a, $b){
    echo "TRUE";
}

?>
</body>
</html>