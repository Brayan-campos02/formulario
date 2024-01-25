<?php
    class formulario{
        private $nombre;

        public function __construct() {
        }

        //get
        public function getNombre(){
            return $this -> nombre;
        }
        //set
        public function setNombre($nombre){
            $this -> nombre = $nombre;
        }
    }
?>