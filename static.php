<?php

    class Pagina{

        //Atributos

        public $nombre = "Codigo facilito";
        public static $url = "www.codigofacilito.com";

        //Metodos

        public function bienvenida(){

           echo "bienvenidos a <b>" . $this->nombre . "</b> la pagina es<b>" . Pagina::$url . "<b><br>";

        }
        
        

    }

$pagina = new Pagina();
$pagina->bienvenida();





?>