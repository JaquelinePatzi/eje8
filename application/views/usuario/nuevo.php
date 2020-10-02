<form action="<?= base_url() ?>usuario/guardar" method="POST" enctype="multipart/form-data">
    Nombres:
    <input type="text" name="Nombres" id="Nombres" class="form-control">

    Apellidos:
    <input type="text" name="Apellidos" id="Apellidos" class="form-control">

    Fotografia:
    <input type="file" name="Fotografia" id="Foto" class="form-control">

    Usuario:
    <input type="text" name="Usuario" id="Usuario" class="form-control">

    Contraseña:
    <input type="text" name="Contrasena" id="Contrasena" class="form-control">

    Nivel:
    <input type="number" min="0" step="0.01" name="Nivel" id="Nivel" class="form-control">

    <br>
    <input type="submit" value="Guardar" class="btn btn-success">
</form>