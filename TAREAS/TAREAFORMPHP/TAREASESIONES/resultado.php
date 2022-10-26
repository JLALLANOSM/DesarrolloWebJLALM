<?php 
    session_start();
    $a = $_SESSION['numa'];
    $b = $_SESSION['numb'];

    $ope = $_GET['ope'];

    if ($ope == 1){
        print("La suma es: ".$a+$b);
    }else{
        print("La resta es: ".$a-$b);
    }

?>