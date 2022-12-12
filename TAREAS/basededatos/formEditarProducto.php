<?php 
    include('verificar.php');
    include('permiso.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include ("conexion.php");
        $id = $_GET['id'];
        $sql = "SELECT id, nombre, descripcion, precio, categoria FROM productos WHERE id=$id";
        $resultado = $con->query($sql);
        $producto = $resultado->fetch_assoc();
    ?>
    <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $producto['id'];?>">
            <div>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" value="<?php echo $producto['nombre']; ?>">
            </div>
            <div>
                <label for="descripcion">Descripcion</label>
                <textarea name="descripcion" cols="10" rows="3"><?php echo $producto['descripcion']; ?></textarea>
            </div>
            <div>
                <label for="precio">Precio</label>
                <input step="any" type="number" name="precio" value="<?php echo $producto['precio']; ?>">
            </div>
            <div>
                <label for="categoria   ">Categoria</label>
                <input type="string" name="categoria" id="" value="<?php echo $producto['categoria'];?>">
            </div>
            <div>
                <input type="submit" value="Enviar">
            </div>
    </form>
</body>
</html>