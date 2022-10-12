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
      echo "hola mundo";
      for($i=0;$i<10;$i++){
        echo "linea ".$i."<br/>";
      }

      echo "<br/>Numero Mayor";
      $a=2;
      $b=5;
      $c=6;
      if($a>$b && $a>$c){
        echo ": ".$a;
      }else if($b>$a && $b>$c){
        echo ": ".$b;
      }else{
        echo ": ".$c;
      }

      echo "<br/>Serie Fibonacci: ";
      $a=0; $b=1; $c=0;
      echo "1,";
      for($i=0;$i<10;$i++){
        $c=$a+$b;
        echo " ".$c.",";
        $a=$b;
        $b=$c;
      }
      
      echo"<br/> Suma n terminos";
      $n = 5;
      $sum =0;
      for($i=1;$i<=$n;$i++){
        $sum = $sum + $i;
      }
      echo " : ".$sum;
      echo "<br/>";
    ?>

</body>
</html>