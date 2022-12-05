<link rel="stylesheet" type="text/css" href="estilo.css">
<?php
/*Elaborar un programa en php que implemente la clase operaciones con las propiedades a,b,c inicie las 
propiedades en el constructor e implemente los siguientes métodos
a CalcularSuma
b CalcularMayor
c MostrarCalculos en una tabla
Posteriormente realizar un menú de acceso con las operaciones 
Introducir Datos, Mostrar Calular, la primera opcion solisita los valores de a,b y c mediante formulario
La segunda opcion muestra la tabla con los resultados de las operaciones
Utilice sesiones para persistir los datos
*/

class Operaciones
{
    private $a;
    private $b;
    private $c;
    public function __construct($a,$b,$c)
    {
        $this->a=$a;
        $this->b=$b;
        $this->c=$c;
    }
    public function CalcularSuma()
    {
        return $this->a+$this->b+$this->c;
    }
    public function CalcularMayor()
    {
        if($this->a>$this->b)
        {
            if($this->a>$this->c)
            {
                return $this->a;
            }
            else
            {
                return $this->c;
            }
        }
        else
        {
            if($this->b>$this->c)
            {
                return $this->b;
            }
            else
            {
                return $this->c;
            }
        }
    }
    public function MostrarCalculos()
    {
    echo "<table id= Tabla>";
        echo "<td>Valor de a</td>";
        echo "<td>Valor de b</td>";
        echo "<td>Valor de c</td>";
        echo "<tr><td>" .$this ->a ."</td>";
        echo "<td>" .$this ->b ."</td>";
        echo "<td>" .$this ->c ."</tr></td>";
        echo "<div class=contenedor>";
        echo "<tr class = op><td>Suma</td>";
        echo "<td>Mayor</td></tr>";
        echo $this->CalcularSuma();
        echo $this->CalcularMayor()."</tr>";
        echo "</div>";
    echo "</table>";
   
    }
}
session_start();
if(isset($_POST["btnEnviar"]))
{
    $a=$_POST["txtA"];
    $b=$_POST["txtB"];
    $c=$_POST["txtC"];
    $obj=new Operaciones($a,$b,$c);
    $_SESSION["obj"]=$obj;
}
if(isset($_SESSION["obj"]))
{
    $obj=$_SESSION["obj"];
    $obj->MostrarCalculos();
}


// Path: Sesiones y Cookies\Jhose\calcular.php
/*session_start();
if(isset($_SESSION["obj"]))
{
    $obj=$_SESSION["obj"];
    $obj->MostrarCalculos();
}*/
?>