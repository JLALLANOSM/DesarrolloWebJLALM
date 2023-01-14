<?php 
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $sexo = $_POST['sexo'];
    $foto = $_FILES['foto'];


//echo json_encode($foto);
    //si queremos enviar vario sdatos utilizamos un array
    /*$sql = "INSERT INTO coche(marca, precio, imagen) VALUES('$marca', '$precio', '$nombreFoto')";
    $resultado = $con->query($sql);*/
$data = [];
    $data = [$nombre, $apellido, $sexo, $foto['name']];
    // utilizamos la siguiente linea porque javascript lo entiende asi 
if ($nombre == '' || $apellido == '' || $sexo == '' || $foto['name'] == '') {
    echo json_encode(false);
}else{
    move_uploaded_file($foto['tmp_name'], 'images/'.$foto['name']);
    echo json_encode($data);
}

?>