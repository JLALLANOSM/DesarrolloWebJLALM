<?php
$n = $_POST['n'];
for ($i = 0; $i < $n; $i++){
?>
    <input type="number" name="" id="n<?php echo"$i";?>">
<?php
}
?>
<button onclick="calcular"></button>


