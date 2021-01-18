<?php
    class ModeloBase extends EntidadBase{
        private $table;
        private $flujo;

        public function __construct($table,$adapter) {
            $this->$table=(string) $table;
            parent::__construct($table, $adapter);
        }

        public function flujo() {
            return $this->$flujo;
        }

        public function ejecutarSql($query) {
            $query = $this->db()->query($query);
            if ($query == true) {
                if ($query->num_rows>1) {
                    while($row = $query->fetch_object()) {
                        $resultset[] = $row;
                    }
                } elseif($query->num_rows==1){
                    if ($row = $query->fetch_object()) {
                        $resultset = $row;
                    } else {
                        $resultset = true;
                    }
                }
            }else {
                $resulset = false;
            }
            return $resultset;
        }

    }
?>