<?php

$diccionario=[
"user1"=>
["nombre"=>"David",
"apellidos"=>"Suarez",
"email"=>"david.suarez@gmail.com"
],
"user2"=>
["nombre"=>"Dasha",
"apellidos"=>"Kuznetsova",
"email"=>"dashasisoy@gmail.com"]
];

function getDatos($array, $parametro, $parametro2){
return $array[$parametro] [$parametro2];
}
var_export(getDatos($diccionario, "user2", "email"));

?>