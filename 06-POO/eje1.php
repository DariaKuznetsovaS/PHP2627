<?php
class Publicacion{
    

    public function __construct(
    public array $autores,
    public int $año,
    public string $editorial,
    public string $titulo,
    public string $texto){
        //Se queda vacío
    }

    public function leer(){
        echo $this->$texto;
    }

    public function escribir(string $cadenaTexto){
        echo $this->$texto.$cadenaTexto;
    }

}

//Primer objeto:
$libroHarry=new Publicacion(["J.K. Rowling"], 2000, "Salamandra", "Harry Potter y la Piedra Filosofal",
"Harry Potter descubre que es un mago");
$libroHarry->leer();
$libroHarry->escribir(" y todo lo que conlleva");
//Segundo objeto:
$libroBlack=new Publicacion(
    ["Michael O'Downell"], 1984, "Blackie books","Blackwater I: La Riada",
    "Una riada azota un pequeño pueblo"
);
$libroBlack->leer();
$libroBalck->escribir(" Elinor es la mejor");
?>