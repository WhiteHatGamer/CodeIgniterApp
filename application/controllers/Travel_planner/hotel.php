<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

require_once('vendor/autoload.php');
use PhpOffice\PhpSpreadsheet\Reader\Csv as ReaderCsv;
use PhpOffice\PhpSpreadsheet\Reader\Xls;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx as ReaderXlsx;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Writer\Html as WriterHtml;
use PhpOffice\PhpSpreadsheet\Writer\Pdf\Dompdf;
use PhpOffice\PhpSpreadsheet\Writer\Csv;
use PhpOffice\PhpSpreadsheet\Writer\Xls as WriterXls;
use PhpParser\Node\Stmt\Catch_;

    class Hotel extends CI_Controller{
        

        public function __construct(){
            parent::__construct();
            $this->load->model('hotel_model');
            $this->load->library(array('session','table'));
        }

        public function index(){

            // Checking If User is Logged In
            if(!$this->session->email){
                redirect(adminTravelPlannerUrl());
                return;
            }

            if(isset($_POST['edit'])){
                
                $edit = $this->hotel_model->get_stay($this->input->post('edit'));
                if(!$edit){

                    redirect(adminTravelPlannerUrl().'hotel/');
                }else{
                    
                    $data['edit'] = $edit;
                }
            }

            if($this->input->post('stay')){
                if($this->hotel_model->update_stay($this->input->post('stay'))){

                    $this->load->view("Travel_planner\inc\saved");
                }else{
                    $data['errorTitle'] = "Not Saved";
                    $data['error'] = "Unable To Update Details";
                    $this->load->view("Travel_planner\inc\warning",$data);
                }

            }

            if($this->input->post('delete')){
                $delete = $this->hotel_model->get_stay($this->input->post('delete'));
                if(!$delete){

                    redirect(adminTravelPlannerUrl().'hotel/');
                }else{
                    
                    $data['delete'] = $delete;
                }
            }
            
            if($this->input->post('confirm_delete')){
                if($this->hotel_model->delete_stay($this->input->post('confirm_delete'))){
                    $this->load->view("Travel_planner\inc\deleted");
                }else{
                    
                    redirect(adminTravelPlannerUrl().'hotel/');
                }
            }

            $result = $this->hotel_model->get_stays();
            if(!$result){
                // No Data Stored
                $this->load->view("Travel_planner\inc/header");
                $this->load->view("Travel_planner\inc/no_data_hotel");
                $this->load->view("Travel_planner\inc/footer");
            }else{
                
                $data['result']=$result;
                // Details Available
                $this->load->view("Travel_planner\inc/header");
                $this->load->view("Travel_planner\Dashboard\ListStays\index",$data);
                $this->load->view("Travel_planner\inc/footer");
            }
        }

        public function export_table($export){

            $hotel_data = $this->hotel_model->get_stays();

            $spreadsheet = new Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();

            $sheet->setCellValue('A1', 'Sl. No');
            $sheet->setCellValue('B1', 'City');
            $sheet->setCellValue('C1', 'Hotel');
            $sheet->setCellValue('D1', 'Check-In');
            $sheet->setCellValue('E1', 'Check-Out');
            $sheet->getColumnDimension('A')->setAutoSize(true);
            $sheet->getColumnDimension('B')->setAutoSize(true);
            $sheet->getColumnDimension('C')->setAutoSize(true);
            $sheet->getColumnDimension('D')->setAutoSize(true);
            $sheet->getColumnDimension('E')->setAutoSize(true);
            $rows = 2;
            foreach ($hotel_data as $val){
                $sheet->setCellValue('A' . $rows, ($rows-1));
                $sheet->setCellValue('B' . $rows, $val['city']);
                $sheet->setCellValue('C' . $rows, $val['hotel']);
                $sheet->setCellValue('D' . $rows, $val['checkIn']);
                $sheet->setCellValue('E' . $rows, $val['checkOut']);
                $rows++;
            }

            // Create Directory if not exists
            $uploadsDir = 'assets/uploads/';
            if (!file_exists($uploadsDir)) {
                mkdir($uploadsDir, 0777, true);
            }
            
            switch ($export) {
                case 'excel':
                    $fileName = $uploadsDir.'hotel.xlsx';
                    $writer = new Xlsx($spreadsheet);

                    // Create File if Not Exists
                    if (!file_exists($fileName)) {
                        touch($fileName);
                    }
                    $writer->save($fileName);
                    header("Content-Type: application/vnd.ms-excel");
                    redirect(base_url().$fileName);
                    break;
                    
                case 'pdf':
                    
                    // instantiate and use the dompdf class
                    $fileName = 'hotel.pdf';
                    $writer = new Dompdf($spreadsheet);
                    $writer->save("uploads/".$fileName);
                    $filePath = "uploads/".$fileName;
                    header('Content-Disposition: attachment; filename="hotel.pdf"');
                    header("Content-Type: application/download");
                    header('Content-Description: File Transfer;');
                    header("Content-Length: " . filesize($filePath));
                    readfile($filePath);
                    break;

                case 'csv':
                        
                    // instantiate and use the dompdf class
                    $fileName = 'hotel.csv';
                    $writer = new Csv($spreadsheet);
                    $writer->save("uploads/".$fileName);
                    header("Content-Type: application/csv");
                    redirect(base_url()."uploads/".$fileName);
                    break;
                default:
                    show_404();
                    break;
            }
        }

        public function appoint(){

            // Checking If User is Logged In
            if(!$this->session->email){
                redirect(adminTravelPlannerUrl());
                return;
            }


            if($this->input->post('submit')){
                // print_r($_POST);
                // print_r($_FILES);
                if(@$_FILES['excel']){

                    $reader = new ReaderXlsx();
                    if(!$reader->canRead($_FILES['excel']['tmp_name'])){
                        redirect(adminTravelPlannerUrl().'hotel/appoint');

                    }
                    $reader->setReadDataOnly(true);
                    $spreadsheet = $reader->load($_FILES['excel']['tmp_name']);
                    

                }elseif(@$_FILES['csv']){
                    
                    $reader = new ReaderCsv();
                    if(!$reader->canRead($_FILES['csv']['tmp_name'])){
                        redirect(adminTravelPlannerUrl().'hotel/appoint');

                    }
                    $reader->setReadDataOnly(true);
                    $spreadsheet = $reader->load($_FILES['csv']['tmp_name']);
                }else{
                    redirect(adminTravelPlannerUrl().'\hotel');
                }
                $dataTitle = [];
                $dataArray = [];
                $dataIDX = 0;
                foreach ($spreadsheet->getActiveSheet()->toArray() as $idx=>$row) {
                    if($idx == 0){
                        $dataTitle[1]=$row[1]=='City'? 'city':exit;
                        $dataTitle[2]=$row[2]=='Hotel'? 'hotel':exit;
                        $dataTitle[3]=$row[3]=='Check-In'? 'checkIn':exit;
                        $dataTitle[4]=$row[4]=='Check-Out'? 'checkOut':exit;
                        continue;
                    }
                    foreach($row as $key=>$value){
                        if($key==0){
                            continue;
                        }
                        $dataArray[$dataIDX][$dataTitle[$key]] = $value;
                    }
                    $dataIDX++;
                }
                $successRow = 0;
                $writer = new WriterHtml($spreadsheet);
                $DataHtml = $writer->generateHtmlAll();
                echo $DataHtml;
                foreach($dataArray as $row){
                    if($this->hotel_model->store_stays($row)){
                        $successRow++;
                    }
                }
                $data['errorTitle'] = "Uploading Finished";
                $data['error'] = "$successRow Out of $dataIDX Uploaded";

                $this->load->view("Travel_planner\inc/warning",$data);

            }
            
            if(isset($_POST['stay'])){
        
                try {
        
                    // Insertion Query
                    if($this->hotel_model->store_stays()){
                        
                        // If success Show Toast Animation
                        $this->load->view("Travel_planner\inc\saved");
                    }
                    

                } catch (\Throwable $th) {
        
                    // Catches Exception
                    $data['errorTitle'] = "Error Occurred";
                    $data['error'] = $th->getMessage();
                    $this->load->view("Travel_planner\inc\warning", $data);
                    return;
                }
            }

            $this->load->view("Travel_planner\inc/header");
            $this->load->view("Travel_planner\Dashboard\AppointHotel/index");
            $this->load->view("Travel_planner\inc/footer");
        }
    }