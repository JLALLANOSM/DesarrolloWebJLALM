<link rel="stylesheet" href= "estilo.css" type "text/css">

<?php
    session_start();
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $_SESSION['a'] = $a;
    $_SESSION['b'] = $b;
    $_SESSION['c'] = $c;
 
    echo "a = $a<br>";
    echo "b = $b<br>";
    echo "c = $c<br>";
    echo "
        <a class = amb href='operaciones.php'>Operaciones</a>
    "
?>