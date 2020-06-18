<?php defined('BASEPATH') OR die('No direct script access allowed');

require('./application/third_party/phpoffice/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Export extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('pdf');
        $this->load->model('export_model');
    }

    public function customer_all_xls()
    {
        $all_cust = $this->export_model->getAll()->result();

        $spreadsheet = new Spreadsheet;

        $spreadsheet->setActiveSheetIndex(0)
                    ->setCellValue('A1', 'No')
                    ->setCellValue('B1', 'Invoice Id')
                    ->setCellValue('C1', 'Email')
                    ->setCellValue('D1', 'First Name')
                    ->setCellValue('E1', 'Last Name')
                    ->setCellValue('F1', 'Company(Optional)')
                    ->setCellValue('G1', 'Phone Number')
                    ->setCellValue('H1', 'Whatsapp')
                    ->setCellValue('I1', 'Address')
                    ->setCellValue('J1', 'City')
                    ->setCellValue('K1', 'State')
                    ->setCellValue('L1', 'Zip Code')
                    ->setCellValue('M1', 'Products ID List')
                    ->setCellValue('N1', 'Status');

        $kolom = 2;
        $nomor = 1;
        foreach($all_cust as $row) {

            $spreadsheet->setActiveSheetIndex(0)
                        ->setCellValue('A' . $kolom, $nomor)
                        ->setCellValue('B' . $kolom, '#'.$row->invoice_id)
                        ->setCellValue('C' . $kolom, $row->email)
                        ->setCellValue('D' . $kolom, $row->first_name)
                        ->setCellValue('E' . $kolom, $row->last_name)
                        ->setCellValue('F' . $kolom, $row->company)
                        ->setCellValue('G' . $kolom, $row->phone_number)
                        ->setCellValue('H' . $kolom, $row->wa)
                        ->setCellValue('I' . $kolom, $row->address)
                        ->setCellValue('J' . $kolom, $row->city)
                        ->setCellValue('K' . $kolom, $row->state)
                        ->setCellValue('L' . $kolom, $row->zip)
                        ->setCellValue('M' . $kolom, $row->products)
                        ->setCellValue('N' . $kolom, ucfirst($row->status));

            $kolom++;
            $nomor++;

        }

        $writer = new Xlsx($spreadsheet);

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="Data-customer.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
      
    }

    public function customer_all_pdf(){
        $pdf = new FPDF('l','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(280,7,'Skylinen.co.id',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(280,0,'----------------------------------------------',0,1,'C');
        $pdf->Cell(280,7,'Hospitally Linen Supplier',0,1,'C');
        $pdf->Cell(280,3,'All customers from Skylinen ',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(35,6,'Invoice Id',1,0);
        $pdf->Cell(55,6,'Email',1,0);
        $pdf->Cell(50,6,'Name',1,0);
        $pdf->Cell(35,6,'Phone Number',1,0);
        $pdf->Cell(35,6,'Whatsapp',1,0);
        $pdf->Cell(35,6,'State',1,0);
        $pdf->Cell(27,6,'Status',1,1);
        $pdf->SetFont('Arial','',10);
        $all_cust = $this->export_model->getAll()->result();
        foreach ($all_cust as $row){
            $pdf->Cell(35,6,'#'.$row->invoice_id,1,0);
            $pdf->Cell(55,6,$row->email,1,0);
            $pdf->Cell(50,6,$row->first_name.' '.$row->last_name,1,0);
            $pdf->Cell(35,6,$row->phone_number,1,0); 
            $pdf->Cell(35,6,$row->wa,1,0); 
            $pdf->Cell(35,6,$row->state,1,0); 
            $pdf->Cell(27,6,$row->status,1,1); 
        }
        $pdf->Output();
    }

}