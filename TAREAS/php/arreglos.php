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
$a= array(1,2,3,4,5,6,7,8,9,10);

for ($i=0; $i < count($a); $i++) { 
    echo  $a[$i] . "<br>";
}

echo "<h2> recorrer con indice  </h2>";

foreach ($a as  $value) {
    echo $value . "<br>";
}


echo "<h2> recorrer con indice y valor </h2>";

foreach ($a as $key => $value) {
    echo "posicion".$key."=" .$value . "<br>";
}


$b=[1,"hola",3.5,"buenas",5,"tardes",7,8,9,10];


foreach ($b as $key => $value) {
    echo "posicion: ".$key."=" .$value . "<br>";
}


echo "<h2> arreglos asociativos </h2>";

$c=[
    "nombre"=>"juan",
    "apellido"=>"perez",
    "edad"=>20,
    "telefono"=>"1234567890",
    "direccion"=>"calle 1 # 2 - 3",
    "ciudad"=>"bogota",
    "pais"=>"colombia"
];

foreach ($c as $key => $value) {
    echo "posicion: ".$key."=" .$value . "<br>";
}


$d=[
    "nombre"=>"juan",
    "apellido"=>"perez",
    "edad"=>20,
    "telefono"=>"1234567890",
    "direccion"=>"calle 1 # 2 - 3",
    "ciudad"=>"bogota",
    "pais"=>"colombia",
    "materias"=>[
        "matematicas"=>5,
        "fisica"=>4,
        "quimica"=>3,
        "programacion"=>5
    ]
];

foreach ($d as $indice=>$valor)
{
    if (is_array($valor)) {
        echo "materias <br>";
        foreach ($valor as $key => $value) {
            echo "materia: ".$key." nota: ".$value."<br>";
        }
    }else{
        echo "posicion: ".$indice."=" .$valor . "<br>";
    }
}

echo "<h2> arreglos multimencionales </h2>";

$e[0][0]=1;
$e[0][1]=2;
$e[0][2]="hola";
$e[0][3]="a";
$e[0][4]=5;
$e[0][5]=6;

foreach ($e as $key => $value) {
    foreach ($value as $key2 => $value2) {
        echo "fila: ".$key."columna".$key2."=" .$value2 . "<br>";
    }
}




echo  "<h2> ir añadiendo valores a un arreglo </h2>";

$arreglo[]=1;
$arreglo[]=2;
$arreglo[]="asda";
$arreglo[]=3.12;

foreach($arreglo as $key => $value){
    echo "posicion: ".$key."=" .$value . "<br>";
}
?>
    
</body>
</html>