<?php
class Triangulo extends Poligono{

function area(){
    $anchura=getAnchura();
    $altura=getAltura();
    return ($this->getAnchura() * $this->getAltura()) / 2;
}

}

?>