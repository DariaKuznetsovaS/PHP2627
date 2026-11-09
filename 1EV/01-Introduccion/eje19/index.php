<?php
$num=$_GET["num"];
$suma=0;
for($x=0;$x<=$num;$x++){

    $suma+=$x;
    $mensaje="La suma de todos los números incluido el dado($num) es: ".$suma;
}

require "index.view.php";
?>