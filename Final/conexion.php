<?php 

    $con = new mysqli("localhost", "root", "", "bd_academica");
    if($con->connect_error){
        exit("conxion fallida".$con->connect_error);
    }
    
?>