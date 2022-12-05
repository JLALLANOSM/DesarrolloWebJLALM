<?php
    include ('conexion.php');

    $correoelectronico = $_POST['correoelectronico'];
    $password = $_POST['password'];

    $sql = "SELECT id, correoelectronico, nombres, nivel FROM usuarios WHERE correoelectronico = '$correoelectronico' AND password = sha1('$password')";

    $resultado = $con->query($sql);
    $filas = $resultado->num_rows;

    if($filas > 0){
        echo "usuario autenticado";
    }else{
        echo "autenticacion incorrecta";
    }


?>