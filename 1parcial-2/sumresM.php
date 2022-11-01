<?php

if (isset($_POST['n'])) {
    setcookie('fil', $_POST['n'], 0);
    setcookie('col', $_POST['m'], 0);

    $n = $_COOKIE['fil'];
    $m = $_COOKIE['col'];
?>
    <form action="sumresM.php" method="post">
        <?php
        echo '<br/> M <br/>';
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $m; $j++) {
        ?>
            <label for="">m1 [<?php echo $i ?>] [<?php echo $j ?>]: </label>
            <input type="number" name="m1[][]" id="">

        <?php
            echo '<br />';
            }
        }
        ?>
        <input type="submit" value="Calcular">
    </form>

<?php
} else {

    echo "Suma Fil Col: ";
    $n = $_COOKIE['fil'];
    $m = $_COOKIE['col'];
    $m1 = $_POST['m1'];
    $fi=0;
    $co=0;
    for ($i = 0; $i < $n; $i++) {
        for($j= 0; $j < $m; $j++){
            $fi = $fi + $m1[$i][$j];
            $co = $co + $m1[$j][$i];
        }
        $v1[$i] = $fi;
        $v2[$i] = $co;
    }
    echo "</br> La Suma Col: ";
    for ($i = 0; $i < $n; $i++) {
        echo "<br>(" . $v1[$i] . ")";
    }
    echo "</br> La Suma Col: ";
    for ($i = 0; $i < $n; $i++) {
        echo "<br>(" . $v2[$i] . ")";
    }
}

?>