<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
        $a = $_GET['a'];  
        setcookie('num0',$a , 0);
        setcookie('num1', $_GET['b'], 0);
    ?>
    <li><a href="resultado.php?ope=1">Sumar</a></li>
    <li><a href="resultado.php?ope=2">Restar</a></li>
</body>
</html>