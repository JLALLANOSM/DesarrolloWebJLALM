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
        session_start();
        $a = $_GET['a'];
        $b = $_GET['b'];
        $_SESSION['numa'] = $a;
        $_SESSION['numb'] = $b;
    ?>
    <UL>
        <li><a href="resultado.php?ope=1">Sumar</a></li>
        <li><a href="resultado.php?ope=2">Restar</a></li>
    </UL>
</body>
</html>