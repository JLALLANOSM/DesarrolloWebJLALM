<?php 
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $foto = $_FILES['foto'];

//echo json_encode($foto);
    //si queremos enviar vario sdatos utilizamos un array
$data = [];
    $data = [$nombre, $usuario, $email, $foto['name']];
    // utilizamos la siguiente linea porque javascript lo entiende asi 
if ($nombre == '' || $usuario == '' || $email == '' || $foto['name'] == '') {
    echo json_encode(false);
}else{
    move_uploaded_file($foto['tmp_name'], $foto['name']);
    echo json_encode($data);
}

?>