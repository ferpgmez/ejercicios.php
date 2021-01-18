<?php
    class ControladorBase{
        public function __construct() {
            require_once 'entidadbase.php';
            require_once 'modelobase.php';

            foreach(glob("model/*.php") as $file) {
                require_once $file;
            }
        }
    
    

    public function vista($vista, $datos) {
        foreach ($datos as $id_assoc => $valor) {
            ${$id_assoc}=$valor;
        }

        require_once 'ayudavistas.php';
        $helper = new AyudaVistas();

        require_once 'vista/'.$vista.'vista.php';
        }
        public function redirect($controlador=CONTROLADOR_DEFECTO, $accion=ACCION_DEFECTO) {
            header("Location:index.php?controller=".$controlador."&action=".$accion);
        }
    }
?>