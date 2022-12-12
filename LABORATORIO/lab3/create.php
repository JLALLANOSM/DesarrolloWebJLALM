<?php 
include("conexion.php");
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$cu = $_POST['cu'];
$sexo = $_POST['sexo'];
$carrera = $_POST['carrera'];

$sql = "INSERT INTO alumnos(nombre, appelido, cu, sexo, carrera) VALUES('$nombre', '$apellido', '$cu', '$sexo', '$carrera')";

if($con->query($sql) === TRUE){
    echo "Alumnos nuevos creados correctamente.";
}else{
    echo"Error:".$sql."<br>".$con->error;
}

$con->close();
?>

<meta http-equiv="refresh" content="3; url=read.php" />