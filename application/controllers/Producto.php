<?php
class Producto extends CI_Controller
{
    public function nuevo()
    {
        $datosC=[
            'titulo' => 'Registro de nuevo Producto'
        ];
        $this->load->view("plantilla/cabecerahtml");
        $this->load->view("plantilla/cabecera",$datosC);
        $this->load->view("producto/nuevo");
        $this->load->view("plantilla/piehtml");
    }

    public function guardar()
    {
        $Nombre=$this->input->post("Nombre");
        $Precio=$this->input->post("Precio");
        $Detalle=$this->input->post("Detalle");
        //echo "GUARDANDO";

        echo $Nombre;
        echo $Precio;
        echo $Detalle;


        $config['upload_path']          = './imagenes/productos';
        //$config['allowed_types']        = 'pdf';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 500;
        $config['max_width']            = 1224;
        $config['max_height']           = 968;
        $config['overwrite']           = true;

        $this->load->library('upload', $config);

        $datosEnviar=[
            'titulo'=>'Registro de Producto'

        ];

        $this->load->view("plantilla/cabecerahtml");
        $this->load->view("plantilla/cabecera", $datosEnviar);
        $nombreArchivo="";
        
        if($this->upload->do_upload('Foto'))
        {
            // echo "correcto";
            $datosArchivo=$this->upload->data();

            $nombreArchivo=$datosArchivo['file_name'];
            
           // echo "<pre>";
           // print_r($datosArchivo);
           // echo "</pre>";
           // echo $nombreArchivo;


           $this->load->model("ProductoModel");
           
           if($this->ProductoModel->insertar($Nombre, $Precio,$Detalle,$nombreArchivo))
           {
               // correcto
                
               $this->load->view("producto/correcto");
        
           }
           else{
               // error

               $this->load->view("producto/error");
           }
        }
        else{
            //echo "error";

            $errores=$this->upload->display_errors();

            // echo "<pre>";
            //print_r($errores);
            //echo "</pre>";

            $this->load->view("producto/error");
        }

        $this->load->view("plantilla/piehtml");
    }
    public function listar()
    {
        // echo "Listando";
        $this->load->model("ProductoModel");
        $datosProductos=$this->ProductoModel->Seleccionar();
        
       /* foreach ( $datosProductos as $p){
        echo "<pre>";
        print_r($datosProductos);
        echo "</pre>";
        }*/

        $desde=$this->uri->segment(3);
        //echo $desde;

        $this->load->library('pagination');

        $config['base_url'] = base_url() . 'producto/listar/';
        $config['total_rows'] = count($datosProductos);
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

        $datosProductos=$this->ProductoModel->Seleccionar($config['per_page'],$desde);

        

        $data=[
            'desde'=>$desde,
            'datosProductos'=>$datosProductos
        ];

        $dataC=[
              'titulo'=>"Listado de Producto"
        ];
        $this->load->view("plantilla/cabecerahtml");
        $this->load->view("plantilla/cabecera", $dataC);
        $this->load->view("producto/listado", $data);
        $this->load->view("plantilla/piehtml");


    }

}

