<?php
if(isset($_POST["user"])&&isset($_POST["pass"])){
    $user=$_POST["user"];
    $pass=$_POST["pass"];

    $usuarios=array(
        "ane1" => array(
            "nombre"=>'Ane',
            "apellidos"=>'López',
            "pass"=>'123Abc'
        ),
        "amaia2"=>array(
            "nombre"=>'Amaia',
            "apellidos"=>'Otsoa',
            "pass"=>'456Xyz'
        ),
        "siri"=>array(
            "nombre"=>'Siri',
            "apellidos"=>'Black',
            "pass"=>'qwerty'
        )
    );

   $resultado= comprobarCredenciales($usuarios, $user, $pass);



    require "enviado.view.php";
} else
require "index.view.php";

function comprobarCredenciales($usuarios, $user, $pass){
    if(!array_key_exists($user, $usuarios)){
        return "Usuario no existe";
    } 
    elseif($pass!==$usuarios[$user]["pass"]){
        return "Contraseña incorrecta";
    } else
    return "Bienvenid@, ".$usuarios[$user]["nombre"]." "
    .$usuarios[$user]["apellidos"]."!";
}

?>