<?php 

        class facebook{

            // Atributos
            public $nombre;
            public $edad;
            private $pass; //contraseña

            //Metodos 
            public function __construct($nombre, $edad, $pass){
                this->nombre = $nombre;
                this->edad = $edad;
                this->pass = $pass;
            }

            public function verInformacion(){
                echo "Nombre:" . this->nombre . "<br>"
                echo "Edad:" . this->edad . "<br>"
                echo "Password:" . this->pass . "<br>"                                
            }
        }


?>