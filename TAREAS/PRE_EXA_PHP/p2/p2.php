<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos.css">
    <title>Index</title>
</head>
<body>
    <div class =Cabecera>
        <img src = "logo.png" alt = "Logo" width="150px">
        <div id = "titulos">
        <h2><span style = "color: red;" > Universidad de San Franciso Xavier </span>  </h2>
        <div class = "Facu">
            <h2 class ="Fac"><span style = "color: blue;">Facultad de Tecnologia </span>
            </h2>
            <div id =Fecha ><span style="color: red;">SUCR</span>
                <span style="color: yellow">E-BOLI</span>
                <span style="color: green">VIA</span> 
            </div> 
        </div>
        <h3> Carrera de Ing en Sistemas, Ciencias de la Computación</h3>
        <h4> Semestre 2-2020</h4>
        </div>
    </div>
    <div class = Cuerpo>
        <div class = C1>
            <?php 
                if(isset($_POST['cadena'])){
                    setcookie('texto', $_POST['cadena'], 0);
                    echo "Cookie Correcto";
                }
            
            ?>
            <ul>
                <li><a href = "index.php">Inicio</a></li>
                <li><a href = "CrearClase.php">Crear Clase</a></li>
                <li><a href = "Aespacio.php">Auemntar Espacio</a></li>
                <li><a href = "Invertir.php">Invertir</a></li>
            </ul>
        </div>
        <br>
        <div class = C2>
            <div class = menu>
                <ul>
                    <li><a href = "index.php">Inicio</a></li>
                    <li><a href = "p1.php">Pregunta 1</a></li>
                    <li><a href = "p2.php">Pregunta 2</a></li>
                    <li><a href = "P3.html">Pregunta 3</a></li>
                </ul>
            </div>
        </div>
    </div>
    <footer class = Pie>
        <footer id = Rojo></footer>
        <footer id = Amarillo></footer>
        <footer class = Verde></footer>
    </footer>

</body>
</html>