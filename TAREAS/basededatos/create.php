<?php 
include("conexion.php");
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$cat = $_POST['categoria'];

$sql = "INSERT INTO productos(nombre, descripcion, precio, categoria) VALUES('$nombre', '$descripcion', '$precio', '$cat')";

if($con->query($sql) === TRUE){
    echo "Producto nuevo creado correctamente.";
}else{
    echo"Error:".$sql."<br>".$con->error;
}

$con->close();
?>

<meta http-equiv="refresh" content="3; url=read.php" />