<?php
$a1=$_COOKIE['num0'];
$b1=$_COOKIE['num1'];

$operacion=$_GET['ope'];

if($operacion=='1'){
    $resultado=$a1+$b1;
    echo "El resultado de la suma es: $resultado";
}
if($operacion=='2'){
    $resultado=$a1-$b1;
    echo "El resultado de la resta es: $resultado";
}