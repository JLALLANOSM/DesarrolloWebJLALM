<?php
    include ('conexion.php');
    
    $id = $_GET['id'];

    echo"El valor de la Id es: ".$id;

    $sql = "DELETE FROM coche WHERE id = $id";

    $resultado = $con->query($sql);

    if($resultado == TRUE){
        echo"Se ha Eliminado Correctamente";
        header('location: index.php');
    }else{
        echo"Error al Eliminar";
        header('location: index.php');
    }