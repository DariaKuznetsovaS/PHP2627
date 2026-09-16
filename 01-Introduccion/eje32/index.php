<?php
$agenda=[
    [
        "nombre" => "Luis Scola",
        "nota1"=> "9",
        "nota2"=>"8",
        "media"=>"8.5"
    ],
    [
        "nombre"=>"Pablo Prigioni",
        "nota1"=>"8",
        "nota2"=>"4",
        "media"=>"6"
    ],
    [
        "nombre" =>"Sergi Vidal",
        "nota1"=>"7",
        "nota2"=>"6",
        "media"=>"6.5"
    ],
    [
        "nombre"=>"Ramón Rivas",
        "nota1"=>"3.5",
        "nota2"=>"6",
        "media"=>"4,75"
    ]
];

/*function resaltarNota($agenda){
    forEach($agenda as $a){
    if($a["nota1"]||$a["nota2"]||$a["media"]){

        style=color: red;
    }
    }
}*/

require "index.view.php";
?>