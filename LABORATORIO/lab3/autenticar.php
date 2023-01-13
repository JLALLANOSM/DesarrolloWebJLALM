<?php
    session_start();
    include ('conexion.php');

    $correoelectronico = $_POST['correoelectronico'];
    $password = $_POST['password'];

    $sql = "SELECT id, correoelectronico, nombres, nivel FROM usuarios WHERE correoelectronico = '$correoelectronico' AND password = sha1('$password')";

    $resultado = $con->query($sql);
    $filas = $resultado->num_rows;

    if($filas > 0){
        echo "usuario autenticadooo";

        $fil = $resultado->fetch_assoc();
        $_SESSION['correoelectronico'] = $correoelectronico;
        $_SESSION['nombres'] = $fil['nombres'];
        $_SESSION['nivel'] = $fil['nivel'];
        header("location:Fintroduccion.html");
    }else{
        echo "autenticacion incorrecta";
    }


?>