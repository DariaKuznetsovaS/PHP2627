<?php
class Poligono{

public function __construct(
    public string $color,
    public string $altura,
    public string $anchura)
    {}
    }

function getColor(){
    return $this->color;
}
function setColor($color){
    $this->color;
}

function getAltura(){
    return $this->altura;
}
function setAltura(){
    $this->altura;
}
function getAnchura(){
    return $this->anchura;
}
function setAnchura($anchura){
    $this->anchura;
}
?>