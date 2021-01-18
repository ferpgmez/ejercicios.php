<?php
    class ControladorCliente {
        private $table;
        private $db;
        private $conect;
        public function __construct() {
            require_once 'modelo/conexion.php';
            require_once 'modelo/clientes.php';
            $this->conect = new Conexion();
            $this->db = $this->conect->conexion();
        }

        

        public function getConect() {
            return $this->conect;
        }
        
        public function db() {
            return $this->db;
        }

        public function seleccionarTodo() {
            $query=$this->db()->query("SELECT * FROM clientes ORDER BY id_cliente DESC");
            while($row = $query->fetch_object()) {
                $resulset[]=$row;
            }

            return $resulset;
        }

        public function seleccionarPorId($id) {
            $query = $this->db()->query("SELECT * FROM clientes WHERE id_cliente=$id");
            return $query;
        }

        public function seleccionarPor($columna, $valor) {
            $query = $this->db()->query("SELECT * FROM clientes WHERE $columna='$valor'");
            while ($row = $query->fetch_object()) {
                $resulset[] = $row;
            }
            return $resulset;
        }

        public function crear() {
            if(isset($_POST["nombre"])) {
                $cliente = new Cliente();
                $cliente->setnombre($_POST["nombre"]);
                $cliente->setapellidos($_POST["apellidos"]);
                $cliente->setdireccion($_POST["direccion"]);
                $cliente->setpoblacion($_POST["poblacion"]);
                $cliente->setcodigopostal($_POST["codigopostal"]);
                $cliente->settelefono($_POST["telefono"]);
                $cliente->email($_POST["email"]);
                $save->$cliente->save();
            }
        }

        public function index() {
            $cliente = new Cliente();
            $clientes = $cliente->seleccionarTodo();
        }
    }
?>