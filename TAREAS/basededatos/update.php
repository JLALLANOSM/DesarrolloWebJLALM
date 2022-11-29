<?php 
    include 'conexion.php';
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $categoria = $_POST['categoria'];

    $sql = "UPDATE productos SET  nombre = '$nombre', descripcion = '$descripcion', precio = $precio, categoria = '$categoria'
            WHERE id = $id";

    if($con->query($sql)===TRUE){
        echo "Modificado Correctamente !!";
    }else{
        echo "Error: $sql, <br> ".$con->error;
    }
    $con->close();
?>
<meta http-equiv="refresh" content="2; url=read.php">
