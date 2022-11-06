<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="http://localhost/desarrollowebjlalm/1parcial-2/estilo.css">
    <title>Document</title>
</head>

<body>
    <div class="contenedor">
        <div class="cabeza">
            <div class="logo">
                <img src="usfx.png" alt="">
            </div>
            <div class="detalle">
                <div class="detalle_1">
                    <h2 id="uni">UNIVERSIDAD DE SAN FRANCISCO XAVIER</h2>
                    <div class="detalle__1">
                        <P id="facu">FACULTAD DE TECNOLOGIA</P>
                        <p>Sucre - Bolivia</p>
                    </div>
                </div>
                <P>Carrera: Ing. Sistemas, Ciencias de la Computacion</P>
                <p>Semestre 2-2022</p>
            </div>
            <div class="logo">
                <img src="tecnologia.png" alt="">
            </div>
        </div>
        <div class="cuerpo">
            <div class="titulo">
                <div class="caja">A</div>
                <div class="caja">B</div>
                <div class="caja">C</div>
                <div class="caja">D</div>
                <div class="caja">E</div>
            </div>
            <div class="contenido">
                <div class="menu">
                    <div>
                        <ul>
                            <li><a href="index.php">INICIO</a></li>
                            <li><a href="p2.php">PREGUNTA 2</a></li>
                            <li><a href="p3.php">PREGUNTA 3</a></li>
                            <li><a href="p4.php">PREGUNTA 4</a></li>
                        </ul>
                    </div>
                </div>
                <div class="centro">
                        <div>
                            <p>Pregunta 2</p>
                        </div>
                        <div>
                            <?php
                                ob_start();
                                if (isset($_POST['Enviar'])) {
                                    $f = $_POST['n'];
                                    $c = $_POST['m'];
                                    setcookie('fil', $f, 0);
                                    setcookie('col', $c, 0);

                                    $n = $_COOKIE['fil'];
                                    $m = $_COOKIE['col'];
                            ?>
                            
                                <form action="sumresM.php" method="post">
                                    <div class="tabla">

                                    
                                        <table>
                                            <tr>
                                                <td style="text-align: center;" colspan="<?php echo$m?>">Matriz [<?php echo"$n x $m";?>]</td>
                                            </tr>
                                    <?php
                                        for ($i = 0; $i < $n; $i++) {
                                    ?>

                                            <tr>
                                    <?php
                                            for ($j = 0; $j < $m; $j++) {
                                    ?>
                                                <td>
                                                        <label for="">[<?php echo $i; ?>] [<?php echo $j; ?>]: </label>
                                                        <input type="number" name="v<?php echo$i; ?>[]" id="">
                                                </td>
                                    <?php
                                            }
                                    ?>
                                            </tr>
                                    <?php
                                            echo '<br />';
                                        }
                                    ?>
                                        </table>
                                    </div>
                                    <input type="submit" name="Calcular" value="Calcular">
                                    
                                </form>


                            <?php
                                } 
                                else {
                                    if (isset($_POST['Calcular'])) {
                                        echo "<br/> Suma Fil Col: <br/>";
                                        $n = $_COOKIE['fil'];
                                        $m = $_COOKIE['col'];
                                        for ($i = 0; $i < $n; $i++) {
                                            for ($j = 0; $j < $m; $j++) {
                                                $m1[$i][$j] = $_POST["v$i"][$j];
                                                echo $m1[$i][$j];
                                            }
                                            echo "<br/>";
                                        }
                                        $fi = 0;
                                        $co = 0;

                                        for ($i = 0; $i < $n; $i++) {
                                            $v1[$i] = 0;
                                            $v2[$i] = 0;
                                            for($j= 0; $j < $m; $j++){
                                                $v1[$i] = $v1[$i] + $m1[$i][$j];
                                            
                                                $v2[$i] = $v2[$i] + $m1[$j][$i];
                                            }
                                        }
                                        echo "</br> La Suma Filas: ";
                                        for ($i = 0; $i < $n; $i++) {
                                            echo "<br>(" . $v1[$i] . ")";
                                        }
                                        echo "</br> La Suma Col: ";
                                        for ($i = 0; $i < $m; $i++) {
                                            echo "<br>(" . $v2[$i] . ")";
                                        }
                                    }
                                }
                            ?>
                        </div>
                </div>
                <div class="derecha">
                    <div>
                        <p>Alumno: LLanos Mendoza Jose Luis Alberto</p>
                        <p>Carrera: Ing. Sistemas</p>
                    </div>
                    <div class="estudiante">
                        <p>Imagen</p>
                        <img src="estudiante.png" alt="">
                    </div>

                </div>
            </div>
        </div>
        <div class="pie">
            <div class="info">
                <div class="izq">
                    <p>Usted Ingreso a esta pagina: </p>
                </div>
                <div class="med">
                    <?php

                        if (isset($_COOKIE['contador'])) {
                            $valor = $_COOKIE['contador'] + 1;
                            echo "$valor";
                            setcookie("contador", $valor, 0); /* expira en 1 hora */
                        } else {
                            echo "es la visita 1";
                            setcookie("contador", 1, 0); /* expira en 1 hora */
                        }
                    ?>
                </div>
                <div class="der">
                    <p>veces</p>
                </div>
            </div>
            <div class="anio">
                <p>Año 2022</p>
            </div>
        </div>
    </div>
</body>

</html>