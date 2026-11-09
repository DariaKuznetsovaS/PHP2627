<?php
$agenda=[
    ["nombre"=>"Amaia",
    "apellidos"=>"Gorbea Jainaga",
    "telefono"=>"945111111",
    "email"=>"agorbea@php.net"],
    ["nombre"=>"Dasha",
    "apellidos"=>"Kuznetsova",
    "telefono"=>"123456789",
    "email"=>"das123@php.net"],
    ["nombre"=>"Siri",
    "apellidos"=>"Black",
    "telefono"=>"987654321",
    "email"=>"siriblack@php-net"]
];

function imprimir($agenda){
    $resultado = "";

    forEach($agenda as $contacto){
        $resultado .= "<tr>
            <td>{$contacto['nombre']}</td>
            <td>{$contacto['apellidos']}</td>
            <td>{$contacto['telefono']}</td>
            <td>{$contacto['email']}</td>
        </tr>";
    }

    return $resultado;
}

require "index.view.php";

?>