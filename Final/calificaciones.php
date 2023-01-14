<?php include("conexion.php");
$sql="SELECT * FROM alumos";
$resultado=$con->query($sql);
?>
<table class="table table-bordered">
    <thead class="bg-success">
        <th>Fotografia</th>
        <th>Titulo</th>
        <th>Texto</th>
        <th>Fecha</th>
        <th>Comentarios</th>
    </thead>
    <tbody>
    <?php while($fila=$resultado->fetch_assoc()) {?>
      <tr>
        <td><img src="<?php echo 'images/'.$fila['imagen']; ?>" width="80">  </td>
        <td><?php echo $fila['titulo'] ?></td>
        <td><?php echo $fila['texto'] ?></td>
        <td><?php echo $fila['fecha'] ?></td>
        <td><?php echo $fila['comentario'] ?>
        <input type="button" onclick="llamarComentar(<?php echo $fila['idnot']; ?>)" value="Insertar comentario"> </td>
      </tr>
    <?php } ?>
    </tbody>
</table>