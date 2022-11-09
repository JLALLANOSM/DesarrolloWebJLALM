<?php 
    $con = new mysqli("localhost", "root", "", "bd_ventas");
    if($con->connect_error){
        exit("conxion fallida".$con->connect_error);
    }
?>