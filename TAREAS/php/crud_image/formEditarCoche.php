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
    <div>
        <h2>Editar Coche</h2>
    </div>
    <div>
        <?php
        include ('conexion.php');
        $id = $_GET['id'];
        $sql = "SELECT id, marca, precio, imagen FROM coche WHERE id = $id";
        $resultado = $con->query($sql);
        $row = $resultado->fetch_assoc();
        //echo"id= ".$row['id'];
       ?>
        <form action="updateCoche.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $row['id'];?>">
            <div>
                Marca: <input type="text" name="marca" id="marca" value="<?php echo $row['marca'];?>">
            </div>
            <br>
            <div>
                Precio: <input type="number" name="precio" id="precio" value="<?php echo $row['precio'];?>">
            </div><br>
            <div>
                <div>
                    <img id="foto" src="<?php echo $row["imagen"];?>" alt="Img no Encontrado" srcset="">
                </div><br><br>
                <div>
                    <input type="hidden" name="fotoa" value="<?php echo $row['imagen']?>">
                    <input type="file" name="foto">
                </div>
            </div> <br><br>
        <div>
                <input type="submit" value="Modificar Coche">
        </div>
            
        </form>

    </div>
    
</body>
</html>