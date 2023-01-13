<?php
session_start();
    include('conexion.php');

?>
    <h3 style="color: red">Tabla Base de Datos</h3>
    <h2><?php //echo $nombre ?></h2>
    <table>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Sexo</th>
        </tr>
<?php

$opcion = $_POST["accion"];

switch ($opcion) {
    case 1:
        $sql = "SELECT id, nombre, apellido, sexo FROM alumnos";
        $resultado = $con ->query($sql);
        imp_tabla($resultado);
        $nombre = "Alumnos";
        $_SESSION['aux'] = 1;
        break;
    case 2:
        $sql = "SELECT id, nombre, apellido, sexo FROM profesor";
        $resultado = $con ->query($sql);
        imp_tabla($resultado);
        $nombre = "profesor";
        $_SESSION['aux'] = 2;
        break;
    case 3:
        $sql = "SELECT id, nombre, apellido, sexo FROM padres";
        $resultado = $con ->query($sql);
        imp_tabla($resultado);
        $nombre = "padres";
        $_SESSION['aux'] = 3;
        break;
    case 4:
        echo $_SESSION['aux'];
        $mibusqueda = $_POST["mibusqueda"]; 
        switch($_SESSION['aux']){
            case 1:
                echo 'si....';
                $sql = "SELECT id, nombre, apellido, sexo FROM alumnos WHERE nombre LIKE '%$mibusqueda%'";
                $resultado = $con ->query($sql);
                imp_tabla($resultado);
                break;
            case 2:
                $sql = "SELECT id, nombre, apellido, sexo FROM profesor WHERE nombre LIKE '%$mibusqueda%'";
                $resultado = $con ->query($sql);
                imp_tabla($resultado);
            break;
            case 3:
                $sql = "SELECT id, nombre, apellido, sexo FROM padres WHERE nombre LIKE '%$mibusqueda%'";
                $resultado = $con ->query($sql);
                imp_tabla($resultado);
            break;
            

        }
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
    echo "holaaas";
if ($resultado->num_rows > 0) {
        echo "enro";
    while ($row = $resultado->fetch_assoc()) {
?>
        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['nombre'];?></td>
            <td><?php echo $row['apellido'];?></td>
            <td><?php echo $row['sexo'];?></td>
        </tr>
<?php
    }
}
}
?>
    </table>
