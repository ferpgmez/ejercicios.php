<?php
    
    
    class Cliente{
        private $id_cliente;
        private $nombre;
        private $apellidos;
        private $direccion;
        private $poblacion;
        private $codigopostal;
        private $email;

        public function __construct() {
            require_once 'conexion.php';
            $this->id_cliente = $id_cliente;
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
            $this->direccion=$direccion;
            $this->poblacion=$poblacion;
            $this->codigopostal=$codigopostal;
            $this->email=$email;
        }

        public function getid_cliente() {
            return $this->$id_cliente;
        }

        public function setid_cliente() {
            $this->id_cliente=$id_cliente;
        }

        public function getnombre() {
            return $this->$nombre;
        }

        public function setnombre() {
            $this->nombre=$nombre;
        }

        public function getapellidos() {
            return $this->apellidos;
        }

        public function setapellidos() {
            $this->apellidos=$apellidos;
        }

        public function getdireccion() {
            return $this->direccion;
        }

        public function setdireccion() {
            $this->direccion=$direccion;
        }

        public function getpoblacion() {
            return $this->poblacion;
        }

        public function setpoblacion() {
            $this->poblacion=$poblacion;
        }

        public function getcodigopostal() {
            return $this->codigopostal;
        }

        public function setcodigopostal() {
            $this->codigopostal=$codigopostal;
        }

        public function settelefono() {
            return $this>telefono;
        }

        public function gettelefono() {
            $this->telefono=$telefono;
        }

        public function getemail() {
            return $this->email;
        }

        public function setemail() {
            $this->email=$email;
        }

        public function save() {
            $query = "INSERT INTO clientes VALUES (NULL,
                                                    '".$this->nombre."',
                                                    '".$this->apellidos."',
                                                    '".$this->direccion."',
                                                    '".$this->poblacion."',
                                                    '".$this->codigopostal."',
                                                    '".$this->telefono."',
                                                    '".$this->email."');";
            $save = $this->db()->query($query);
            return $save;

        }
    }
?>