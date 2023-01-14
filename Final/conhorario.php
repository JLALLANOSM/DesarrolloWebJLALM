<?php
session_start();
    include('conexion.php');

?>
    <h3 style="color: red">Tabla Base de Datos</h3>
    <h2><?php //echo $nombre ?></h2>
    <table>
        <tr>
            <th>Id</th>
            <th>materia</th>
            <th>dia</th>
            <th>hora</th>
        </tr>
<?php

$opcion = $_POST["accion"];

switch ($opcion) {
    case 1:
        $sql = "SELECT id, materia, dia, hora FROM horarios WHERE materia ='SIS256'";
        $resultado = $con ->query($sql);
        imp_tabla($resultado);
        $_SESSION['aux'] = 1;
        break;
}
    /*if ($_POST["accion"] == 1){
        $sql = "SELECT id, nombre, apellido, sexo FROM alumnos";
        $nombre = "Alumnos"; 
} else if ($_POST["accion"] == 2) {
    $sql = "SELECT id, nombre, apellido, sexo FROM profesor";
    $nombre = "Profesores"; 
}else{
    $sql = "SELECT id, nombre, apellido, sexo FROM padres";
    $nombre = "Padres"; 
}*/

    ?>
    
<?php


function imp_tabla($resultado){
if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
?>
        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['materia'];?></td>
            <td><?php echo $row['dia'];?></td>
            <td><?php echo $row['hora'];?></td>
        </tr>
<?php
    }
}
}
?>
    </table>
