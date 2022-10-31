<?php 
    class Operacion {
        public $cadena;
        
        public function __construct($cadena) {
            $this->cadena = $cadena;
        }

        public function aumentarEspacio($n){
            for($i=0; $i<strlen($this->cadena); $i++){
                echo $this->cadena[$i];
                for($j=0; $j<$n; $j++){
?>
                    &nbsp;
<?php
                }
            }
        }
        public function invertir(){
            echo strrev($this->cadena); 
        }
    }

?>