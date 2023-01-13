<?php
/* 
$autor=$_POST['autor'];
$titulos=$_POST['titulos'];
$img=$_POST['img'];
echo "<ul>";
echo "<li>Nombre: $autor</li>";
echo "<li>Titulo: $titulos</li>";
echo "<li>img: $img</li>";
echo "</ul>";

echo $_FILES['archivo']['name'];
echo $_FILES['archivo']['type'];
echo $_FILES['archivo']['size'];*/
include("conexion.php");
$id= $_POST['id'];
$imagen = $_FILES['img'];
$titulos = $_POST['titulos'];
$autor = $_POST['autor'];
$ideditorial = $_POST['ideditorial'];
$anio = $_POST['anio'];
$idusuario = $_POST['idusuario'];
$idcarrera = $_POST['idcarrera'];

$sql = "INSERT INTO libros(id, imagen, titulo, autor, ideditorial, anio, idusuario, idcarrera) VALUES('$id','$imagen', '$titulos', '$autor', '$ideditorial', '$anio', '$idusuario', '$idcarrera')";

if($con->query($sql) === TRUE){
    echo "Libro nuevo creado correctamente.";
}else{
    echo"Error:".$sql."<br>".$con->error;
}

$con->close();
?>