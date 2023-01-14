<?php include("conexion.php");
$sql="SELECT * FROM horarios WHERE materia= 'SIS256'";
$resultado=$con->query($sql);
$fila = $resultado->fetch_all();
json_encode($fila);
?>
<h2>Tabla <?php echo $fila[0][1]?></h2>
<table class="table table-bordered">
    <thead class="bg-success">
        <th style="background-color: blue;">Hora</th>
        <th style="background-color: blue;"><?php echo $fila[0][2]?></th>
        <th style="background-color: blue;">Martes</th>
        <th style="background-color: blue;"><?php echo $fila[2][2]?></th>
        <th style="background-color: blue;">Jueves</th>
        <th style="background-color: blue;">Viernes</th>
        
    </thead>
    <tbody>
        <tr>
        <td style="background-color: blue;">8-9</td><td>_</td><td>_</td><td>_</td><td>_</td><td>_</td>
        </tr>
        
        <tr><td style="background-color: blue;">9-10</td><td>_</td><td>_</td><td>_</td><td>_</td><td>_</td></tr>
        <tr><td style="background-color: blue;">10-11</td><td>_</td><td>_</td><td>_</td><td>_</td><td>_</td></tr>
        <tr><td style="background-color: blue;">11-12</td><td>_</td><td>_</td><td>_</td><td>_</td><td>_</td></tr>
        <tr><td style="background-color: blue;">12-13</td><td>_</td><td>_</td><td>_</td><td>_</td><td>_</td></tr>
        <tr><td style="background-color: blue;">14-15</td><td>_</td><td>_</td><td>_</td><td>_</td><td>_</td></tr>
        <tr><td style="background-color: blue;"><?php echo $fila[0][3]."-".$fila[1][3]?></td> <td style="background-color: yellow;">_</td><td>_</td><td style="background-color: yellow;">_</td><td>_</td><td>_</td></tr>
        <tr><td style="background-color: blue;"><?php echo $fila[0][3]."-".$fila[1][3]?></td> <td style="background-color: yellow;">_</td><td>_</td><td style="background-color: yellow;">_</td><td>_</td><td>_</td></tr>
    </tbody>
</table>

