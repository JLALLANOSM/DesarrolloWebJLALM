<link rel="stylesheet" href="est.css">
<?php
    echo "MATRIZ : ".$_POST['n']." x ".$_POST['m'];
?>
<table class="tabla">
    <?php
        $n = $_POST['n'];
        $m = $_POST['m'];
        $cont=1;
        $v = array("viva", "mi", "sucre", "viva", "cuna", "de", "libertad");
        for ($i = 1; $i <= $n; $i++) {
    ?> 
        <tr>
            <?php 
                for ($j = 1; $j <= $m; $j++) {
                
            ?>
                <td>
                    <?php
                        echo $v[$i];
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