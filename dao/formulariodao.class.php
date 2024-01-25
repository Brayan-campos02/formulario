<?php
    require_once("../dao/bd.class.php");
    require_once("../modelo/formulariobe.class.php");

    class formulariodao{
        public function __construct() {
        }

        public function enviarFormulario($obj){
            $nombre = $obj->getNombre();

            $base = new Bd();
            $conexion = $base -> getConnectionMYSQL();

            $sql = "insert into datos(nombre) values ('$nombre');";

            $res = $conexion -> query($sql);


            if ($res) {
                echo "Consulta exitosa.";
            } else {
                echo "Error en la consulta: " . $conexion->error;
            }
        
            return $res;
        }
    }
?>