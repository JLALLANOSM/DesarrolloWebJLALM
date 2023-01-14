<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h2>Agregar Coche</h2>
    </div>
    <div>
        <form action="consulta.php" method="post" enctype="multipart/form-data">
            <div>
                Marca: <input type="text" name="marca" id="marca">
            </div>
            <br>
            <div>
                Precio: <input type="number" name="precio" id="precio">
            </div><br>
            <div>
                <input type="file" name="foto" id="foto" >
            </div> <br><br>
        <div>
                <input type="submit" value="Agregar Coche">
        </div>
            
        </form>

    </div>
    
</body>
</html>