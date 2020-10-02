<?php

class ProductoModel extends CI_Model
{
    public function insertar($nombre, $precio, $detalle, $foto)
    {
        $datos=[
            'nombre' => "$nombre",
            'precio' => "$precio",
            'detalle' => "$detalle",
            'foto' => "$foto",
            'fecha' => date("Y-m-d"),
            'hora' => date("H:i:s"),
            'activo' => 1,
        ];
  
       // $this->load->library("database");
        return $this->db->insert("producto", $datos);

    }

    public function seleccionar($cantidad="", $desde ="0")
    {
        $this->db->select('id_producto, nombre, precio, detalle, foto');
        $this->db->where('activo',1);
        $this->db->order_by('nombre');

        if($cantidad!=""){
            $this->db->limit($cantidad, $desde);
        }
        
        $query= $this->db->get('producto');
        return $query->result();

    }
}