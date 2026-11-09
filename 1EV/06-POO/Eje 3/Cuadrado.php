<?php
class Cuadrado extends Poligono{


public function area() {
        return $this->getAnchura() * $this->getAnchura();
    }

}