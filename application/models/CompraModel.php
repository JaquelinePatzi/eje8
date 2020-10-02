<?php

class CompraModel extends CI_Model
{
    public function insertar($id_producto, $cantidad)
    {
        $datos=[
            'id_producto' => "$id_producto",
            'cantidad' => "$cantidad",
            'fecha' => date("Y-m-d"),
            'hora' => date("H:i:s"),
            'activo' => 1,
        ];
  
        // $this->load->library("database");
        return $this->db->insert("compra", $datos);

    }

    public function seleccionar($cantidad1="", $desde ="0")
    {
        $this->db->select('id_compra, id_producto, cantidad');
        $this->db->where('activo',1);
        $this->db->order_by('id_producto');

        if($cantidad1!=""){
            $this->db->limit($cantidad1, $desde);
        }
        
        $query= $this->db->get('compra');
        return $query->result();

    }

}