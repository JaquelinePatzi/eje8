<table class="table table-bordered table-hover">
      <thead>
           <tr>
               <th>N</th>
               <th>Productos</th>
               <th>Precio</th>
               <th>Foto</th>
               <th>Detalle</th>
               <th></th>

           </tr>
      </thead>
       <tbody>
           <?php 
           $i=$desde;
           foreach ($datosProductos as $dp){
               $i++;
              ?>
                 <tr>
                     <td><?= $i; ?></td>
                     <td><?= $dp->nombre ?></td>
                     <td><?= $dp->precio ?></td>
                     <td><img src="<?= base_url() ?>imagenes/productos/<?= $dp->foto ?>" width="50"></td>
                     <td><?= $dp->detalle ?></td>
                     <td>
                     
                     <a href="<?= base_url() ?>producto/modificar" class="btn btn-xs btn-warning">Modificar</a>
                     <a href="<?= base_url() ?>producto/eliminar" class="btn btn-xs btn-danger">Eliminar</a>
                     </td>

                 </tr>



            <?php
           }?>
       </tbody>
</table>
<?php
echo $this->pagination->create_links();
?>