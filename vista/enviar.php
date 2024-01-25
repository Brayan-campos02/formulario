<?php
    require_once("../controlador/formulariocontroller.class.php");
    require_once("../modelo/formulariobe.class.php");
    session_start();

    //post
    $nombre = $_POST['nombre'];

    //--------------------
    $obj = new formularioController();
    $item = new formulario();
    //--------------------

    //set
    $item -> setNombre($nombre);

    //--------------------
    $res = $obj -> enviarFormulario($item);
?>