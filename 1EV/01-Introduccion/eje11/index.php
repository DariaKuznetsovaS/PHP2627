<?php

$cadena1=$_GET["cadena1"];
$cadena2=$_GET["cadena2"];
$resultado=concatenar($cadena1, $cadena2);

function concatenar($cadena1, $cadena2="Adios"){
return  $cadena1 . $cadena2;
}
require "index.view.php";
?>