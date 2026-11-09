<?php

abstract class Poligono {

    private string $color;
    private float $altura;
    private float $anchura;

    public function __construct(string $color, float $altura, float $anchura) {
        $this->color = $color;
        $this->altura = $altura;
        $this->anchura = $anchura;
    }

    // Getters
    public function getColor(): string {
        return $this->color;
    }

    public function getAltura(): float {
        return $this->altura;
    }

    public function getAnchura(): float {
        return $this->anchura;
    }

    // Setters
    public function setColor(string $color): void {
        $this->color = $color;
    }

    public function setAltura(float $altura): void {
        $this->altura = $altura;
    }

    public function setAnchura(float $anchura): void {
        $this->anchura = $anchura;
    }

    // Método abstracto
    abstract public function area(): float;

    /*Obligamos a implementar area(): todas las clases concretas que hereden de Poligono tendrán que definir cómo se calcula su área.
    Si no lo hacen, PHP dará un error.

Evitamos crear polígonos genéricos: no podemos hacer new Poligono(...), porque es una clase abstracta.
Tenemos que crear una figura concreta, como un triángulo o un cuadrado.

Mantenemos una estructura común: todas las figuras comparten el color, la altura, la anchura y el método area(), 
aunque cada una calcule el área de forma diferente.*/ 
}