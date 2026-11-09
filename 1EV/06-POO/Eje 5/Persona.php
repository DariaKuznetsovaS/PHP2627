<?php

class Persona {

    public static int $personasEnElMundo = 0;

    public function __construct() {
        self::$personasEnElMundo++;
    }
}