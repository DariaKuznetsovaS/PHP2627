<?php

$diccionario=[
"casa"=>"house",
"hoja"=>"sheet",
"ordenador"=>"computer",
"ratón"=>"mouse",
"teclado"=>"keyboard"
];

echo "La traducción de casa es: ".$diccionario["casa"];
forEach($diccionario as $e){
    echo $e ."<br>";
}
//echo "La traducción de array_values($diccionario)[0] es array_values($diccionario)[1]";

?>