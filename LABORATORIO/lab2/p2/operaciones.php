<link rel="stylesheet" href= "estilo.css" type "text/css">
<?php

      class Operaciones{
        private $a;
        private $b;
        private $c;
        public function __construct($a,$b,$c){
            $this->a=$a;
            $this->b=$b;
            $this->c=$c;
        }
        public function CalcularSuma(){
            return $this->a*$this->b*$this->c;
        }
        public function CalcularMayor(){
            if($this->a>$this->b && $this->a>$this->c){
                return $this->a;
            }elseif($this->b>$this->a && $this->b>$this->c){
                return $this->b;
            }else{
                return $this->c;
            }
        }
        public function MostrarCalculos(){
            echo "<div id = contenedor>";
            echo "<div id = titulo>";
            echo "<div id = 'a'> Valor de a </div>";
            echo "<div id = 'a'> Valor de b </div>";
            echo "<div id = 'a'> Valor de c </div>";
            echo"</div>";
            echo "<div id = d>";
            echo "<div id = datos> $this->a </div>";
            echo "<div id = datos> $this->b </div>";
            echo "<div id = datos> $this->c </div>";
            echo "</div>";
            echo "<div id = Sumas>";
            echo "<div id = a>Suma</div>";
            echo "<div id = datos>".$this->CalcularSuma()."</div>";
            echo "</div>";
            echo "<div id = Mayor>";
            echo "<div id = a>Mayor</div>";
            echo "<div id = datos>".$this->CalcularMayor()."</div>";
            echo "</div>";
            
        
        }
    }

    session_start();
    $a = $_SESSION['a'];
    $b = $_SESSION['b'];
    $c = $_SESSION['c'];
    $operaciones = new Operaciones($a,$b,$c);
    echo "a = $a<br>";
    echo "b = $b<br>";
    echo "c = $c<br>";
    $operaciones->MostrarCalculos();
    
?>

