<form action="<?= base_url() ?>compra/guardar" method="POST" enctype="multipart/form-data">
    Producto:
    <input type="number" name="Id_producto" id="Id_producto" class="form-control">

    Cantidad:
    <input type="number" min="0" step="0.01" name="Cantidad" id="Cantidad" class="form-control">

    

    <br>
    <input type="submit" value="Guardar" class="btn btn-success">
</form>
