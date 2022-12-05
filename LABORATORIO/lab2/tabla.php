<link rel="stylesheet" href="estilos.css">
<?php
    echo "MATRIZ : ".$_POST['fil']." x ".$_POST['col'];
?>
<table class="tabla">
    <?php
        $n = $_POST['fil'];
        $m = $_POST['col'];
        $cont=1;
    $val[0][0] = 3; $val[0][1] = 2; $val[0][2] = 1;
    $val[1][0] = 3; $val[1][1] = 2; $val[1][2] = 1;

        for ($i = 0; $i <= $n; $i++) {
    ?> 
        <tr>
            <?php 
                for ($j = 0; $j <= $m; $j++) {
            ?>
                    <?php
                        if ($j == $n && $i == $n) {
                            echo "<td></td>";
                        }else{
                            if($j==$m){
                                echo "<td class='c1'>".$val[0][$i]."</td>";
                            }else{
                                if($i==$n){
                                    echo "<td class='c1'>".$val[0][$j]."</td>";
                                }else{
                    ?>
                                    <td>
                                      <?php
                                        echo $val[0][$i]*$val[1][$j];
                                        ?>  
                                    </td>
                                  <?php  
                                }
                            }
                        }
                        
                    ?>
                
            <?php
                }
            ?> 
              
        </tr>
        <?php
        }
        ?>
</table>