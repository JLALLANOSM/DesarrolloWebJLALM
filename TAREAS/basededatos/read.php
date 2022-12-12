<?php include('verificar.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>
<body>
    <?php
        echo "bienvenido: " .$_SESSION['nombres'];
        include ("conexion.php");
        $sql = "SELECT id, nombre, descripcion, precio, categoria FROM productos";
        $resultado = $con->query($sql);

        $i=1;
        if ($resultado->num_rows > 0){
    ?>
    <table>
        <tr>
            <th>Nor</th>
            <th>NOMBRE</th>
            <th>DESCRIPCION</th>
            <th>PRECIO</th>
            <th>CATEGORIA</th>
            <th>ACCIONES</th>
        </tr>
            <?php while($row = $resultado->fetch_assoc()){
            ?>
            <tr>
                <td> <?php echo$i++; ?> </td>
                <td> <?php echo $row["nombre"]; ?> </td>
                <td> <?php echo $row["descripcion"]; ?> </td>
                <td> <?php echo $row["precio"]; ?> </td>
                <td><?php echo $row["categoria"]; ?></td>
                <td>
                    <a href="formEditarProducto.php?id=<?php echo $row["id"]?>">Editar</a>
                    <a href="delete.php?id=<?php echo $row["id"] ?>">Eliminar</a>
                </td>
            </tr>
            <?php } ?>
    </table>
    <?php
        }else{
            echo "No tiene productos";
        }
    ?>
    <a href="formProductos.html">Nuevo Producto</a>
</body>
</html>