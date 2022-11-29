<?php 
    include ("conexion.php");
    $id = $_GET['id'];
    $sql = "DELETE FROM productos WHERE id= $id";
    $resultado = $con->query($sql);
    if($con->query($sql)===TRUE){
        echo "Se elimino el producto";
    }else{
        echo "Error: $sql <br> ".$con->error;
    }
    $con->close();
?>
<meta http-equiv="refresh" content="2; url=read.php">