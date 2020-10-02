<form action="<?= base_url() ?>producto/guardar" method="POST" enctype="multipart/form-data">
    Nombre:
    <input type="text" name="Nombre" id="Nombre" class="form-control">

    Precio:
    <input type="number" min="0" step="0.01" name="Precio" id="Precio" class="form-control">

    Detalle:
    <input type="text" name="Detalle" id="Detalle" class="form-control">

    Foto:
    <input type="file" name="Foto" id="Foto" class="form-control">

    <br>
    <input type="submit" value="Guardar" class="btn btn-success">
</form>
