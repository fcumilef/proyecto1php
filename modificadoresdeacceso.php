<?php 

        class Facebook{

            // Atributos
            public $nombre;
            public $edad;
            private $pass; //contraseña

            //Metodos 
            public function __construct($nombre, $edad, $pass){
                $this->nombre = $nombre;
                $this->edad = $edad;
                $this->pass = $pass;
            }

            public function verInformacion(){
                echo "Nombre:" . $this->nombre . "<br>";
                echo "Edad:" . $this->edad . "<br>";
                $this->cambiarPass("54321");
                echo "Password:" . $this->pass . "<br>";                                
            }

            private function cambiarPass($pass){
                $this->pass = $pass;
            }
        }

        $facebook = new Facebook("felipe cumilef", 22, 12345);

        $facebook->verInformacion();



?>