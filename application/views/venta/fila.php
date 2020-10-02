<?php
/// $p[1][nombre]
/// $p[2][nombre]


?>
<tr>
    <td><?= $fila; ?></td>
    <td>
        <select name="p[<?= $fila; ?>][id_producto]" class="form-control id_producto " rel="<?= $fila; ?>">
            <option value="0">Seleccionar</option>
            <?php foreach ($datosProductos as $p) {
                ?>
                <option value="<?= $p->id_producto ?>"><?= $p->nombre ?></option>
            <?php
            } ?>

        </select>
        <img class="img-thumbnail imagen" rel="<?= $fila; ?>" width="100">
    </td>
    <td>
        <input type="text" readonly class="form-control text-right stock" name="p[<?= $fila; ?>][stock]" value="0" rel="<?= $fila; ?>">

    </td>
    <td>
        <input type="text" readonly class="form-control text-right precio" name="p[<?= $fila; ?>][precio]" value="0" rel="<?= $fila; ?>">
    </td>
    <td>
        <input type="number" class="form-control text-right cantidad" min=0 name="p[<?= $fila; ?>][cantidad]" value="0" rel="<?= $fila; ?>">
    </td>
    <td>
        <input type="number" class="form-control text-right total" readonly min=0 name="p[<?= $fila; ?>][total]" value="0" rel="<?= $fila; ?>">
    </td>
    <td>
        <a href="#" class="btn btn-danger eliminar" rel="<?= $fila; ?>">X</a>
    </td>
</tr>