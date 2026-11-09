<?php
$num1=$_GET["num1"];
$num2=$_GET["num2"];

if($num1===$num2){
   echo "Los numeros son iguales, por tanto, su multiplicación da: " .$num1*$num2;
} else {
    echo "Los números son distintos, por tanto, su suma da:" .$num1+$num2;
}
?>