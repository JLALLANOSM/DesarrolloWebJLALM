<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Index</title>
</head>

<body>
    <div class=Cabecera>
        <img src="logo.png" alt="Logo" width="150px">
        <div id="titulos">
            <h2><span style="color: red;"> Universidad de San Franciso Xavier </span> </h2>
            <div class="Facu">
                <h2 class="Fac"><span style="color: blue;">Facultad de Tecnologia </span>
                </h2>
                <div id=Fecha><span style="color: red;">SUCR</span>
                    <span style="color: yellow">E-BOLI</span>
                    <span style="color: green">VIA</span>
                </div>
            </div>
            <h3> Carrera de Ing en Sistemas, Ciencias de la Computación</h3>
            <h4> Semestre 2-2020</h4>
        </div>
    </div>
    <div class=Cuerpo>
        <div class=C1>
            <div>
                <?php
                
                if(isset($_POST['n'])){
                    setcookie('nv', $_POST['n'], 0);

                    $n = $_COOKIE['nv'];
                    $v1 = array();
                ?>
                <form action="restarVec.php" method="post">
                    <?php
                    echo'<br/> Vector 1 <br/>';
                    for ($i = 0; $i < $n; $i++) {
                    ?>
                        <label for="">V1 [<?php echo $i ?>] : </label>
                        <input type="number" name="v1[]" id="">

                    <?php
                        echo '<br />';
                    }
                    ?>

                    <?php
                    echo '<br/> Vector 2 <br/>';
                    for ($i = 0; $i < $n; $i++) {
                    ?>
                        <label for="">V2 [<?php echo $i ?>] : </label>
                        <input type="number" name="v2[]" id="">

                    <?php
                        echo '<br />';
                    }
                    ?>
                    <input type="submit" value="Restar">
                </form>
                
                <?php 
                }
                else{
                    echo"Restar v1 - v2";
                    $n = $_COOKIE['nv'];
                    $v1 = $_POST['v1'];
                    $v2 = $_POST['v2'];
                    for($i = 0; $i < $n; $i++) {
                        echo "<br>(".$v1[$i].") - (".$v2[$i].")";
                        $sum[$i] = $v1[$i]-$v2[$i];
                    }
                    echo "</br> La Resta v1 - v2 es: ";
                    for($i = 0; $i < $n; $i++) {
                        echo "<br>(".$sum[$i].")";
                    }

                }
                    
                ?>
            </div>

        </div>

        <div class=C2>
            <div class=menu>
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="p1.php">Pregunta 1</a></li>
                    <li><a href="/Repositorio/Parcial 1/Practicas/G1/2/P2.html">Pregunta 2</a></li>
                    <li><a href="P3.html">Pregunta 3</a></li>
            </div>
        </div>
    </div>
    </div>
    <footer class=Pie>
        <footer id=Rojo></footer>
        <footer id=Amarillo></footer>
        <footer class=Verde></footer>
    </footer>

</body>

</html>