<?php
$num=$_GET["num"];
$suma=0;
for($x=0;$x<=$num;$x++){
    if(!esPar($num)) 
        continue;
    $suma+=$x;
    $mensaje="La suma de todos los números PARES es: ".$suma;
}
//Para 100: if(($resultado+$x)>$limite)
function esPar($num){
    if($num%2==0){
        return true;
    } return false;
}


require "index.view.php";
?>