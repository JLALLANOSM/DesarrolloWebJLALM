<?php
    class Cadena{
        public $cadena;

        public function __construct($cadena)
        {
            $this->cadena = $cadena;
        }

        public function cScript(){
            
            $buscada = "script";
            $resul = strchr($this->cadena, $buscada);
            echo "la cadena contiene la palabra: $resul"; 
        }
    }
    $cad = new Cadena($_POST['cadena']);
    $cad->cScript();

?>