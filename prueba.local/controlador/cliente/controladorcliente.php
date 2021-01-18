<?php
    class ControladorCliente extends ControladorBase{
        public function __construct() {
            parent::__construct();
        }

        public function index() {
            $cliente = new Cliente();
            $clientes = $cliente->getAll();
            $this->vista("index", array("allusers=>allusers"));
        }

        public function crear() {
            if(isset($_POST["nombre"])) {
                $cliente = new Cliente();
                $cliente->setnombre($_POST["nombre"]);
                $cliente->setapellidos($_POST["apellidos"]);
                $cliente->setdireccion($_POST["direccion"]);
                $cliente->setpoblacion($_POST["poblacion"]);
                $cliente->setcodigopostal($_POST["codigopostal"]);
                $ciente->settelefono($_POST["telefono"]);
                $cliente->setemail($_POST["email"]);
            }

            $this->redirect("cliente","index");
        }

        public function borrar() {
            if (isset($_GET['id_cliente'])) {
                $id=(int)$_GET["id_cliente"];
                $cliente = new Cliente();
                $cliente->deleteById($id);
            }

            $this->redirect();
        }

        
    }
?>