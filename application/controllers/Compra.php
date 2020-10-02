<?php
class Compra extends CI_Controller
{
    public function nuevo()
    {
        $datosC=[
            'titulo' => 'Registro de nuevo Compra'
        ];
        $this->load->view("plantilla/cabecerahtml");
        $this->load->view("plantilla/cabecera",$datosC);
        $this->load->view("compra/nuevo");
        $this->load->view("plantilla/piehtml");
    }

    public function guardar()
    {
        $Id_producto=$this->input->post("Id_producto");
        $Cantidad=$this->input->post("Cantidad");
        
        


        $this->load->view("plantilla/cabecerahtml");

        $datosEnviar=[
            'titulo'=>'Registro de Compra'
        ];

        $this->load->view("plantilla/cabecera",$datosEnviar);
       
        //$nombreArchivo="";
        $this->load->model("CompraModel");
           
           
           if($this->CompraModel->insertar($Id_producto, $Cantidad))
           {
               // correcto
               
                
              $this->load->view("compra/correcto");
        
            } else{
               // error

               $this->load->view("compra/error");
            }
      $this->load->view("plantilla/piehtml");
    }
    
    public function listar()
    {
        $this->load->model("CompraModel");
        $datosCompras=$this->CompraModel->Seleccionar();


        $desde=$this->uri->segment(3);


        $this->load->library('pagination');

        $config['base_url'] = base_url() . 'compra/listar/';
        $config['total_rows'] = count($datosCompras);
        $config['per_page'] = 2;
        $config['num_links'] = 3;
        $config['uri_segment'] = 3;
        
        // estilo de la Paginacion
        $config['full_tag_open']='<ul class="pagination">';
        $config['full_tag_close']='</ul>';
        $config['num_tag_open']='<li>';
        $config['num_tag_close']='</li>';
        $config['cur_tag_open']='<li class="active"><a>';
        $config['cur_tag_close']='</a></li>';
        $config['prev_tag_open']='<li>';
        $config['prev_tag_close']='</li>';

        $config['first_tag_open']='<li>';
        $config['first_tag_close']='</li>';

        $config['first_link']='Primero';

        $config['next_tag_open']='<li>';
        $config['next_tag_close']='</li>';

        $config['last_tag_open']='<li>';
        $config['last_tag_close']='</li>';

        $config['last_link']='Ultimo';


        $this->pagination->initialize($config);

        $datosCompras=$this->CompraModel->Seleccionar($config['per_page'],$desde);

        

        $data=[
            'desde'=>$desde,
            'datosCompras'=>$datosCompras
        ];

        $dataC=[
              'titulo'=>"Listado de Compras"
        ];
        $this->load->view("plantilla/cabecerahtml");
        $this->load->view("plantilla/cabecera", $dataC);
        $this->load->view("compra/listado", $data);
        $this->load->view("plantilla/piehtml");
        
    }
}

