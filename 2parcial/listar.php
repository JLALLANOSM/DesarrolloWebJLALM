<?php
    include("conexion.php");
    $sql = "SELECT * FROM libros";
    $resultado = $con->query($sql);
    $i=1;
        if ($resultado->num_rows > 0) {
?>
<style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>

        <table>
            <tr>
            <th>Nro</th>    
            <th>titulo</th>
            <th>autor</th>
            <th>ideditorial</th>
            <th>anio</th>
            </tr>
            <?php while ($row = $resultado->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row["titulo"]; ?></td>
                    <td><?php echo $row["autor"]; ?></td>
                    <td><?php echo $row["ideditorial"]; ?></td>
                    <td><?php echo $row["anio"]; ?></td>
                      
                </tr>
            <?php  } ?>
        </table>
        <?php }
        ?>