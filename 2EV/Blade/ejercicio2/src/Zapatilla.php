<?php 
namespace Ejercicio2;

class Zapatilla{
    private $marca;
    private $modelo;
    private $tipo;
    private $precio;

    public function __construct($marca, $modelo, $tipo, $precio){

    $this->marca=$marca;
    $this->modelo=$modelo;
    $this->tipo=$tipo;
    $this->precio=$precio;
    
    }

    public function getMarca(){
        return $this->marca;
    }

    public function setMarca($marca){
        $this->marca=$marca;
    }

    public function getModelo(){
       return $this->modelo;
    }

    public function setModelo($modelo){
        $this->modelo=$modelo;
    }

    public function getTipo(){
       return $this->tipo;
    }

    public function setTipo($tipo){
        $this->tipo=$tipo;
    }

    public function getPrecio(){
       return $this->precio;
    }

    public function setPrecio($precio){
        $this->precio=$precio;
    }

    

}