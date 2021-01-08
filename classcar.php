<?php
    class coche{
        public $color;
        public $modelo;
        public $matricula;
        public $velocidad;
        
        public function __construct($colorVehiculo, $modeloVehiculo, $matriculaVehiculo, $velocidadVehiculo) {
            $this->color = $colorVehiculo;
            $this->modelo = $modeloVehiculo;
            $this->matricula = $matriculaVehiculo;
            $this->velocidad = $velocidadVehiculo;
        }
        public function cambiaColor($colorNuevo) {
             return $this->color = $colorNuevo;
        }
        public function acelerar($nuevaVelocidad) {
            return $this->velocidad = $nuevaVelocidad;
        }
        public function frenar($nuevaVelocidad) {
             return $this->velocidad = $nuevaVelocidad;
        }
    }

 $audi = new coche("rojo", "audi", "PO-1313-X", 120);

echo $audi->color;
echo "</br>";
echo $audi->modelo;
echo "</br>";
echo $audi->matricula;
echo "</br>";
echo $audi->velocidad;

echo $audi->cambiaColor("Negro");
echo "</br>";
echo $audi->acelerar(140);
echo "</br>";
echo $audi->frenar(100);
    
    

?>