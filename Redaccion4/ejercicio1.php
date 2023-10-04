<?php
    /**
     * Clase persona
     */


    class Persona {
        protected $nombre;
        protected $DNI;
        protected $edad;
        protected $sueldo;

        function __construct($nombre,$DNI,$edad,$sueldo) {
            $this -> nombre = $nombre;
            $this -> DNI = $DNI;
            $this -> edad = $edad;
            $this -> sueldo = $sueldo;
        }

        public function getNombre() {
            return $this -> nombre;
        }

        public function esMayorEdad() {
            if ($this -> edad >= 18) {
                return true;
            } else {
                return false;
            }
        }

        public function getEdad() {
            return $this -> edad;
        }

        public function getSueldo() {
            return $this -> sueldo;
        }

        public function setSueldo($sueldo) {
            $this -> sueldo = $sueldo;
        }

        public function setEdad($edad) {
            $this -> edad = $edad;
        }

        public function calculaLetra() {
            $listaLetras = array(0 => "T", 1 => "R", 2 => "W", 3 => "A", 4 => "G", 5 => "M", 
            6 => "Y", 7 => "F", 8 => "P", 9 => "D", 10 => "X", 11 => "B", 12 => "N",
            13 => "J", 14 => "Z", 15 => "S", 16 => "Q", 17 => "V", 18 => "H", 19 => "L",
            20 => "C", 21 => "K", 22 => "E", 23 => "T");

            return $listaLetras[$this -> DNI%23];
        }

    }


    $gentuzo = new Persona("Pepe Perez",77558877,56,1500);
    echo $gentuzo -> calculaLetra();
?>