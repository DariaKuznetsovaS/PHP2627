<?php
$agenda=[
    ["nombre"=>"Amaia",
    "apellidos"=>"Gorbea Jainaga",
    "telefono"=>"945111111",
    "email"=>"agorbea@php.net"],
    ["nombre"=>"Dasha",
    "apellidos"=>"Kuznetsova",
    "telefono"=>"123456789",
    "email"=>"das123@php.net"]
];

function imprimir($agenda){
    $resultado = "";

    for($x = 0; $x < count($agenda); $x++){
        $resultado .= "<tr>
            <td>{$agenda[$x]['nombre']}</td>
            <td>{$agenda[$x]['apellidos']}</td>
            <td>{$agenda[$x]['telefono']}</td>
            <td>{$agenda[$x]['email']}</td>
        </tr>";
    }

    return $resultado;
}

require "index.view.php";

?>