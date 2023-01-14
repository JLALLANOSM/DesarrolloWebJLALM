<?php include("conexion.php");
$num = $_GET['num'];
$sql="SELECT fotografia, nombres_apellidos FROM alumnos limit 5";
$resultado=$con->query($sql);

$nom = ["Fotografia", "Nombres_apellidos"];

$datos = $resultado->fetch_all();
?>
<h2>Lista de Alumnos </h2>
<table class="table table-bordered">
    <thead class="bg-success">
        <th>fotografia</th>
        <th>nombres_apellidos</th>
        <?php
        for ($i=0; $i<$num; $i++){
            echo "<th>Cuadro$i</th>";
        }
        ?>
    </thead>
    <tbody>
    <?php

    for ($i = 0; $i < 5; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 2; $j++) {
            
            if($j==0){?>
                <td><img src="<?php echo 'images/'.$datos[$i][0]; ?>" width="30">  </td>
            <?php
            }else{
                echo "<td>".$datos[$i][$j]."</td>";
            }
            
        }
        for ($k=0; $k<$num; $k++){
            echo "<td>Cuadr</td>";
        }
        echo "</tr>";
    }
    
    
    ?>
    </tbody>
</table>