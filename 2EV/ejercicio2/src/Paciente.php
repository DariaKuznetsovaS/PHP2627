<?php
namespace Ejercicio2;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Level;

class Paciente{

    private $nombre;
    private $apellidos;
    private $edad;
    private $log;

    public function __construct($nombre, $apellidos, $edad){
    
        $this->nombre=$nombre;
        $this->apellidos=$apellidos;
        $this->edad=$edad;

        //Logger
        $this->log=new Logger('paciente');

        //Indica dónde se guardan los logs:
        $this->log->pushHandler(new StreamHandler
        (__DIR__ . "/../app.log", Level::Warning));

    }

    public function realizarAccion($accion){
        switch($accion){
            case "enfermar":
                $this->enfermar();
                echo "He enfermado";
            break;

            case "curar":
                $this->curar();
                echo "Me he curado";
            break;
        }

    }

    public function enfermar(){
        $this->log->warning("Estoy enfermo");
    }

    public function curar(){
        $this->log->warning("Me he curado!");
    }
}