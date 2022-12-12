<?php
session_start();
if(!isset($_SESSION['correoelectronico'])){
    header("location:mensaje.html");
    die('no estas autorizado');
}
?>