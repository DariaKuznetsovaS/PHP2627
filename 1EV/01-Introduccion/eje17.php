<?php
$user=$_GET["user"];
$pass=$_GET["pass"];
$usuarios=[
    "user1"=>[
        "nombre"=>"Nora",
        "pass"=>"1234",
        "email"=>"nora@php.net"],
    "user2"=>[
        "nombre"=>"Siri",
        "pass"=>"qwerty",
        "email"=>"siri@php.net"]
];


if(array_key_exists($user, $usuarios)){
    if($usuarios[$user]["pass"]==$pass){
        echo "Bienvenido, ".$usuarios[$user]["nombre"];
    } else {
        echo "Contraseña incorrecta";
    }
} else{
    echo "El usuario no existe";
}

?>