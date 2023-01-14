<?php
include("conexion.php");
$marca = $_POST['marca'];
$precio = $_POST['precio'];
$foto = $_FILES['foto'];
$nombreFoto = 'images/'.$foto['name'];
move_uploaded_file($foto['tmp_name'], 'images/'.$foto['name']);
/*echo $marca."<br>".$precio;*/
//echo "<br>".$foto['tmp_name']."Nombre Foto: ".$foto['name'];
if($marca == '' || $precio == '' || $foto['name']==''){
    echo"No se han completado algunos Campos";
    header("location:newCoche.php");
}else{
    $sql = "INSERT INTO coche(marca, precio, imagen) VALUES('$marca', '$precio', '$nombreFoto')";
    $resultado = $con->query($sql);
    if($resultado == TRUE){
        echo"Se ha Registrado con Exito..";
        header("location:index.php");
    }else{
        echo"Error de Registro";
        header("location:newCoche.php");
    }
    
}


?>