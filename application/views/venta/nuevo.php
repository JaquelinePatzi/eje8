<h2 class="bg-dark text-white text-center p-2">Venta de Productos</h2>
<form action="<?= base_url(); ?>venta/guardar" method="POST">
    <table class="table table-hover table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>N</th>
                <th>Producto</th>
                <th>Stock</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>

            <!---AQUI ESTABA EL TR--->



            <tr id="marca">
                <td><a href="" class="btn btn-primary" id="aumentar">+</a></td>
                <td colspan="4" class="text-right">Total</td>
                <td>
                    <input type="number" class="form-control text-right" readonly min=0 name="totalgeneral" value="0">
                </td>
            </tr>
            <tr>

                <td colspan="3" class="text-right">Nombre:
                    <input type="text" class="form-control" name="nombre"></td>
                <td colspan="2" class="text-right">Cancelado</td>
                <td>
                    <input type="number" class="form-control text-right" min=0 name="cancelado" value="0">
                </td>
            </tr>
            <tr>
                <td colspan="3" class="text-right">Nit:
                    <input type="text" class="form-control" name="nit"></td>
                <td colspan="2" class="text-right">Cambio</td>
                <td>
                    <input type="number" class="form-control text-right" min=0 name="cambio" readonly value="0">
                </td>
            </tr>

        </tbody>
    </table>

    <input type="submit" value="Guardar" class="btn btn-success">
</form>