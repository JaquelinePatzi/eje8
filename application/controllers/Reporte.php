<?php
class Reporte extends CI_Controller
{
    public function venta()
    {
        $this->load->view("plantilla/cabecerahtml");
        $dataC = [
            'titulo' => "Reporte de Ventas"
        ];
        $this->load->view("plantilla/cabecera", $dataC);
        $this->load->view("reporte/venta");
        $this->load->view("plantilla/piehtml");
    }

    public function ventapdf()
    {

        $this->load->helper(["numero", "texto"]);
        // $this->load->helper();

        $this->load->model("VentaModel");

        $datosVentas = $this->VentaModel->seleccionar();



        // $this->load->library('Pdf', ['P', 'mm', [180, 100]]);
        $this->load->library('Pdf', ['P', 'mm', 'letter']);
        $this->pdf->AddPage();

        $this->pdf->SetFont('Arial', '', 11);

        $i = 0;
        foreach ($datosVentas as $dv) {
            $i++;

            $this->pdf->Cell(10, 5, $i, 1, 0, "R");
            $this->pdf->Cell(50, 5, minuscula($dv->nombre), 1, 0);
            $this->pdf->Cell(50, 5, $dv->nit, 1, 0);
            $this->pdf->Cell(20, 5, decimal($dv->total), 1, 0, "R");
            $this->pdf->Cell(20, 5, decimal($dv->cancelado), 1, 0, "R");
            $this->pdf->Cell(20, 5, decimal($dv->cambio), 1, 0, "R");

            $this->pdf->ln();
        }





        $this->pdf->Output();
    }
}
