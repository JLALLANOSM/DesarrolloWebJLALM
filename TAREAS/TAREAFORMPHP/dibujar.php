<link rel="stylesheet" href="estilos.css">
<h2>LLANOS MENDOZA JOSE LUIS ALBERTO</h2>
<H3>MATRIZ DE NUMEROS CONSECUTIVOS PRACTICA SIS 256</H3>
<?php
    echo "MATRIZ : ".$_POST['n']." x ".$_POST['m'];
?>
<table class="tabla">
    <?php
        $n = $_POST['n'];
        $m = $_POST['m'];
        $cont=1;
        for ($i = 1; $i <= $n; $i++) {
    ?> 
        <tr>
            <?php 
                for ($j = 1; $j <= $m; $j++) {
            ?>
                <td>
                    <?php
                        echo $cont++;
                    ?>
                </td>
            <?php
                }
            ?>    
        </tr>
        <?php
        }
        ?>
</table>
