<?php

        class Vehiculo{

            //Atributos

            public $motor = false;
            public $marca;
            public $color;

            //Metodos

            public function estado(){
                if($this->motor)
                echo "El motor esta encendido<br>";
                else
                echo "El motor esta apagado<br>";
            }

            public function encender(){
                if($this->motor){
                    echo "Cuidado, el motor esta prendido<br>";
                }else{
                    echo "El motor ahora esta encendido<br>";
                    $this->motor = true;
                }
            }
        }

        class Moto extends Vehiculo{
            public function estadoMoto(){
                $this->estado();
            }
        }

        class CuatriMoto extends Moto{

        }

        
        $moto = new Cuatrimoto();
        $moto->estado();

?>