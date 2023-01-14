<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
</head>
<body>
    <h2>Crud con Imagenes</h2>
    <hr>
    <a id="btnagregar" href="newCoche.php">Agregar</a>
    <hr>
    <table>
        <thead>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Sexo</th>
            <th>Accion</th>
        </thead>
<?php  
        include("conexion.php");

        $sql = "SELECT id, marca, precio, imagen FROM coche";
        $resultado = $con->query($sql);
while($row = $resultado->fetch_assoc()) {
    ?>
        <tbody>
            <td><?php echo $row["id"];?></td>
            <td><?php echo $row["marca"];?></td>
            <td><?php echo $row["precio"];?></td>
            <td>
                <img id="foto" src="<?php echo $row["imagen"];?>" alt="Img no Encontrado" srcset="">
            </td>
            <td>
                <div>
                    <a href="formEditarCoche.php?id=<?php echo$row["id"]?>" class="btneditar">Editar</a>
                    <a href="deleteCoche.php?id=<?php echo$row["id"]?>" class="btneliminar">Eliminar</a>
                </div>
            </td>
        </tbody>
        <?php } ?>
    </table>
</body>
</html>