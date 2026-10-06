<?php
class Triangulo extends Poligono{

function area(){
    $anchura=getAnchura();
    $altura=getAltura();
    return $anchura*$altura;
}

}





?>