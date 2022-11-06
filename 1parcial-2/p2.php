<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/desarrollowebjlalm/1parcial-2/estilo.css">
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
                        <form action="sumresM.php" method="post">
                            <label for="">Fila n:</label>
                            <input type="number" name="n" id="">
                            <label for="">Columna m:</label>
                            <input type="number" name="m" id="">
                            <input type="submit" name="Enviar" value="Enviar">
                        </form>
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