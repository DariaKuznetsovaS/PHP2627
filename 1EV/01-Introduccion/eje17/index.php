<?php

$usuarios=[
    "user1"=>[
        "nombre" => "Siri",
        "pass" => "qwerty",
        "email" => "siri@php.net"
    ],
    "user2" =>[
        "nombre" => "Dasha",
        "pass" => "1234",
        "email" => "dasha@php.net"
    ],
    "user3" =>[
        "nombre" => "admin",
        "pass" => "admin",
        "email" => "admin@php.net"
    ]
    ];
    $user=$_GET["user"];
    $pass=$_GET["pass"];
    $mensaje="Introduce los datos";

    if(array_key_exists($user, $usuarios)){
        if($usuarios[$user]["pass"]==$pass){
        $mensaje="Bienvenid@, ".$usuarios[$user]["nombre"] ;
        } else{
            $mensaje="Contraseña incorrecta";
        }
    } else {
        $mensaje="Este usuario no está registrado";
    }

require "index.view.php";
?>