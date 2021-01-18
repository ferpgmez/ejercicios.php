<?php
    class EntidadBase{
        private $table;
        private $db;
        private $conectar;
        
        public function __construct($table, $adapter) {
            /*
            require_once 'conexion.php';
            $this->conexion = new Conexion()
            $this->db = $this->conexion->conexion();
            */

            $this->conectar = null;
            $this->db = $adapter;
        }

        public function getConectar() {
            return $this->conectar;
        }

        public function db() {
            return $this->db;
        }

        public function getAll() {
            $query = $this->db->query("SELECT * FROM $this->table ORDER BY id DESC");
            while($row = $query->fetch_object()) {
                $resultset[] = $row;
            }
            return $resultset;
        }

        public function getBy($column, $value) {
            $query = $this->db->query("SELECT * FROM $this->table WHERE $column='$value'");
            while($row = $query->fetch_object()) {
                $resulset[] = $row;
            }
            return $resulset;
        }

        public function getById($id) {
            $query = $this->db->query("SELECT * FROM $this->table WHERE id = $id");
            if ($row = $query->fetch_object()) {
                $resulset = $row;
            }
            return $resulset;
        }

        public function deleteById($id) {
            $query = $this->db->query("DELETE * FROM $this->table WHERE id=$id");
            return $query;
        }

        public function deleteBy($column, $vale) {
            $query = $this->db->query("DELETE * FROM $this->table WHERE $column='$value'");
            return $query;
        }
    }
?>