<h3>Datos del Usuario</h3>

<form id="formulario" action="javascript:enviarInfo()" enctype="multipart/form-data">
    <div>
        Nombre: <input type="text" id="idnombre" name="nombre" placeholder="nombre">
    </div>
    <br>
    <div>
        Apellido: <input type="text" id="idapellido" name="apellido" placeholder="apellido">
    </div>
    <br>
    <div>
        Sexo: <input type="text" id="idsexo" name="sexo" placeholder="sexo">
    </div>
    <br>
    <input type="file" name="foto" id="archivo"><br><br>
    <input type="submit" value="Enviar Informacion">
</form>
