<?php
    require_once("../dao/formulariodao.class.php");
    require_once("../modelo/formulariobe.class.php");

    class formularioController{
        public function __construct() {
        }

        public function enviarFormulario($obj){
            $data = new formulariodao();
            return $data -> enviarFormulario($obj);
        }
    }
?>