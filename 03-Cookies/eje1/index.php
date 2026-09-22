<?php


$mensaje="";
if(isset($_POST["user"])){
    $user=$_POST["user"];
    setcookie("user",$user);
}

if(isset($_POST["borrar"])){
    setcookie("user", NULL, -1);
    $mensaje="Cookie borrada";
}
    if(!isset($_COOKIE["user"])){
        $mensaje="No hay ningun usuario almacenado.";
        
    } else{
        $mensaje="Último nombre almacenado: ".$_COOKIE["user"];
    }



require "index.view.php";

?>