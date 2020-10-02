<?php

class UsuarioModel extends CI_Model
{
    public function insertar($nombres, $apellidos, $fotografia, $usuario,$contrasena, $nivel)
    {
        $datos=[
            'nombres' => "$nombres",
            'apellidos' => "$apellidos",
            'fotografia' => "$fotografia",
            'usuario' => "$usuario",
            'contrasena' => "$contrasena",
            'nivel' => "$nivel",
            'fecha' => date("Y-m-d"),
            'hora' => date("H:i:s"),
            'activo' => 1,
        ];
  
        // $this->load->library("database");
        return $this->db->insert("usuario", $datos);

    }

    public function seleccionar($cantidad="", $desde ="0")
    {
        $this->db->select('id_usuario, nombres, apellidos, fotografia, usuario, contrasena, nivel');
        $this->db->where('activo',1);
        $this->db->order_by('nombres');

        if($cantidad!=""){
            $this->db->limit($cantidad, $desde);
        }
        
        $query= $this->db->get('usuario');
        return $query->result();

    }

}