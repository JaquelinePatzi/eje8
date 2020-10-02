<?php
class VentadetalleModel extends CI_Model
{


    public function insertar($id_venta, $id_producto, $cantidad, $precio, $total)
    {

        $datos = [
            'id_venta' => "$id_venta",
            'id_producto' => "$id_producto",
            'cantidad' => "$cantidad",
            'precio' => "$precio",
            'total' => "$total",
            'fecha' => date("Y-m-d"),
            'hora' => date("H:i:s"),
            'activo' => 1,
        ];


        return $this->db->insert("ventadetalle", $datos);
    }

    function sumarProducto($id_producto)
    {

        $this->db->select('sum(cantidad) as cantidad');
        $this->db->where('activo', 1);
        $this->db->where('id_producto', $id_producto);

        $query = $this->db->get("ventadetalle");

        return $query->result();
    }
}
