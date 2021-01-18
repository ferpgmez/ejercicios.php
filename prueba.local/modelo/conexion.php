<?php
    class Conexion{
        private $driver;
        private $host;
        private $user;
        private $pass;
        private $database;
        private $charset;

        public function __construct() {
            $db_cfg = require_once 'config/db_config.php';
            $this->driver = $db_cfg["driver"];
            $this->host = $db_cfg["host"];
            $this->user = $db_cfg["user"];
            $this->pass = $db_cfg["pass"];
            $this->database = $db_cfg["database"];
            $this->charset = $db_cfg["charset"];
        }

        public function conexion() {
            if ($this->driver == "mysql" || $this->driver == null) {
                $conn = new mysqli($this->host, $this->user, $this->pass, $this->database);
                $conn->query("SET NAMES '". $this->charset."';");
            }
            return $conn;
        }
    }
?>