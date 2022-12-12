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
        <form action="create.php" method="post">
            <table>
                <tr >
                    <th>
                        Nombres
                    </th>
                    <th>
                        Apellidos
                    </th>
                    <th>
                        CU
                    </th>
                    <th>
                        F o M
                    </th>
                    <th>
                        Carrera
                    </th>
                </tr>
                <?php
        $n = $_POST['numa'];

        for ($i = 1; $i <= $n; $i++) {
    ?> 
        <tr>
            <?php 
                for ($j = 1; $j <=1; $j++) {
            ?>
            <td>
                <div>
                <input type="text" name="nombre" id="">
                </div>
            </td>
            <td>
                <div>
                <input type="text" name="apellido" id="">
                </div>
            </td>
            <td>
                <div>
                <input type="text" name="cu" id="">
                </div>
            </td>
            <td>
                <div>
                    <input type="checkbox" name="sexo" id="" value="F">
                    <input type="checkbox" name="sexo" id="" value= "M">
                </div>
                </td>
                <td>
                <div>
                    <select name="carrera" id="" class="form-control">
                    
                    <?php 
                        include('conexion.php');
                        $sql = "SELECT id, codcarrera, carreras from carrera order by id";
                        $datos = $con->query($sql);
                        while($row = $datos->fetch_assoc()){
                            $id = $row['id'];
                            $codcarrera = $row['codcarrera'];
                            $carreras = $row['carreras'];
                        ?>

                            <option value="<?php echo $id; ?>"><?php echo $carreras; ?></option>
                            <?php
                        }
                    ?>
                    
                </div>
                </td>
                <td> 
                <div>
                <input type="submit" value="Enviar">
            </div>
                </td>
                    
            <?php

                }
            ?>    
        </tr>
        <?php
        }
        ?>
            </table>        
        </form>
    </div>
</body>
</html>