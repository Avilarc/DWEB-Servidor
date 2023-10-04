<?php
    /**
     * Herencia de clase con futbolista
     */

    include "ejercicio1.php";

    class Futbolista extends Persona  {
        private $equipo;
        private $posicion;

        function __construct($nombre,$edad,$sueldo,$equipo,$posicion) {
            $this -> nombre = $nombre;
            $this -> edad = $edad;
            $this -> sueldo = $sueldo;
            $this -> equipo = $equipo;
            $this -> posicion = $posicion;
        }

        public function getPosicion() {
            return $this -> posicion;
        }

        public function getEquipo() {
            return $this -> equipo;
        }
    }

    $futbolisto = new Futbolista("Alberto",25,rand(20000,100000),"Granada CF","Delantero");
?>