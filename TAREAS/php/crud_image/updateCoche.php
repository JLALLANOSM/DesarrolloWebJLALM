<?php

include('conexion.php');

$id = $_POST['id'];
$marca = $_POST['marca'];
$precio = $_POST['precio'];
$foto = $_FILES['foto'];
if($foto['name']==''){
    $nombreFoto= $_POST['fotoa'];
}else{
    $nombreFoto = 'images/'.$foto['name'];
    move_uploaded_file($foto['tmp_name'], $nombreFoto);
}

if($marca == '' || $precio == '' || $nombreFoto==''){
    echo"No se han completado algunos Campos";
    header("location:newCoche.php");
}else{
    $sql = "UPDATE coche SET marca='$marca', precio='$precio', imagen='$nombreFoto' WHERE id = $id";
    $resultado = $con->query($sql);
    if($resultado == TRUE){
        echo"Se ha Modificado con Exito..";
        header("refresh:3;url=index.php");
    }else{
        echo "Error al Modificar, error: $sql, <br> ".$con->error;
        header("refresh:10;url=formEditarCoche.php");
    }
}
$con->close();
?>

