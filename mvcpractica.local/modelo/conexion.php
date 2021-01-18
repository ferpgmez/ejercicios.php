<?php
    class Conexion{
        private $driver;
        private $host;
        private $user;
        private $pass;
        private $database;
        private $charset;

        private function __construct() {
            $db_conf = require_once 'config.php';
            $this->driver = $db_conf["driver"];
            $this->host = $db_conf["host"];
            $this->user = $db_conf["user"];
            $this->pass = $db_conf["pass"];
            $this->database = $db_conf["database"];
            $this->charset = $db_conf["charset"];
        }
        
        public function conexion() {
            if($this->driver="mysql" || $this->driver=null) {
                $conn = new mysqli($this->host, $this->user, $this->pass, $this->database);
                $conn->query("SET NAMES '". $this->charset);
            }

            return $conn;
        }
    }
?>