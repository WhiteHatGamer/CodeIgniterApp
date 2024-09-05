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

            if(!is_null($this->input->post('edit'))){
                
                $edit = $this->hotel_model->get_stay($this->input->post('edit'));
                if(!$edit){

                    redirect(adminTravelPlannerUrl().'hotel/');
                }else{
                    
                    $data['edit'] = $edit;
                }
            }

            if(!is_null($this->input->post('stay'))){
                if($this->hotel_model->update_stay($this->input->post('stay'))){

                    $this->load->view("Travel_planner\inc\saved");
                }else{
                    $data['errorTitle'] = "Not Saved";
                    $data['error'] = "Unable To Update Details";
                    $this->load->view("Travel_planner\inc\warning",$data);
                }

            }

            if(!is_null($this->input->post('delete'))){
                $delete = $this->hotel_model->get_stay($this->input->post('delete'));
                if(!$delete){

                    redirect(adminTravelPlannerUrl().'hotel/');
                }else{
                    
                    $data['delete'] = $delete;
                }
            }
            
            if(!is_null($this->input->post('confirm_delete'))){
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
                    $fileName = $uploadsDir.'hotel.pdf';
                    $writer = new Dompdf($spreadsheet);
                    $writer->save($fileName);
                    $filePath = $fileName;
                    header('Content-Disposition: attachment; filename="hotel.pdf"');
                    header("Content-Type: application/download");
                    header('Content-Description: File Transfer;');
                    header("Content-Length: " . filesize($filePath));
                    readfile($filePath);
                    break;

                case 'csv':
                        
                    // instantiate and use the dompdf class
                    $fileName = $uploadsDir.'hotel.csv';
                    $writer = new Csv($spreadsheet);
                    $writer->save($fileName);
                    header("Content-Type: application/csv");
                    redirect(base_url().$fileName);
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


            if(!is_null($this->input->post('submit'))){
                // Verifying File
                $canRead = 1;
                $fileType = 'none';
                if(@$_FILES['excel']){
                    
                    $reader = new ReaderXlsx();
                    if(!$reader->canRead($_FILES['excel']['tmp_name'])){
                        $canRead = 0;
                        $data['errorTitle'] = "Error Importing";
                        $data['error'] = "File Format Not Supported";
                        $data['warningHtml'] = '<button class="btn btn-info" onClick="window.location.href=window.location.href">Refresh Page to Try Again</button>';
        
                        $this->load->view("Travel_planner\inc/warning",$data);
                        
                    }
                    if($canRead){
                        
                        $fileType = 'excel';
                        $reader->setReadDataOnly(true);
                        $spreadsheet = $reader->load($_FILES['excel']['tmp_name']);
                    }
                    
                    
                }elseif(@$_FILES['csv']){
                    
                    $reader = new ReaderCsv();
                    if(!$reader->canRead($_FILES['csv']['tmp_name'])){
                        $canRead = 0;
                        $data['errorTitle'] = "Error Importing";
                        $data['error'] = "File Format Not Supported";
                        $data['warningHtml'] = '<button class="btn btn-info" onClick="window.location.href=window.location.href">Refresh Page to Try Again</button>';
        
                        $this->load->view("Travel_planner\inc/warning",$data);

                    }
                    
                    if($canRead){
                        $fileType = 'csv';
                        $reader->setReadDataOnly(true);
                        $spreadsheet = $reader->load($_FILES['csv']['tmp_name']);
                    }
                }else{
                    redirect(adminTravelPlannerUrl().'\hotel');
                }

                // Run code if only Readable
                if($canRead){
                    $tmp_file_path = $_FILES[$fileType]['tmp_name'];
                    $file_path = tempnam(explode('application', APPPATH)[0].'assets/tmp/','tmp');

                    copy($tmp_file_path, $file_path);
                    
                    $dataTitle = [];
                    $dataArray = [];
                    $dataIDX = 0;
                    foreach ($spreadsheet->getActiveSheet()->toArray() as $idx=>$row) {
                        if($idx == 0){
                            // Checking if Sheet Contains Correct Data
                            if($row[1]!='City'){
                                $wrongFile = true;
                                break;
                            }
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

                    // Show Error Alert for Importing Wrong Data
                    if(isset($wrongFile)){
                        $data['errorTitle'] = "Not Imported";
                        $data['error'] = "Wrong Data Format";
                        $data['warningHtml'] = '<p>Try to Import In the same Data Types and Formats</p><br><button class="btn btn-info" onClick="window.location.href=window.location.href">Refresh Page to Try Again</button>';
        
                        $this->load->view("Travel_planner\inc/danger",$data);

                    }else{
                        
                        $tableHtml = "
                        <form method='post' action='".$_SERVER['REQUEST_URI']."'>
                            <table id='hotel_table' class='table table-bordered table-striped'>
                                <thead>
                                    <tr>
                                        <th>Sl No.</th>
                                        <th>City</th>
                                        <th>Hotel</th>
                                        <th>CheckIn</th>
                                        <th>CheckOut</th>
                                    </tr>
                                </thead>
                        ";

                        $id = 1;
                        foreach ($dataArray as $row) {
                            $tableHtml = $tableHtml."<tr>";
                            $tableHtml = $tableHtml."<td class='text-center'>".$id."</td>";
                            foreach ($row as $key => $value) {
                                if ($key == 'email') {
                                    continue;
                                }
                                if ($key == 'checkIn' || $key == 'checkOut') {
                                    $tableHtml = $tableHtml."<td>" . date('d-M-Y', strtotime($value)) . "</td>";
                                } else {
                                    $tableHtml = $tableHtml."<td>" . $value . "</td>";
                                }
                            }
                            $tableHtml = $tableHtml."</tr>";
                            $id++;
                        }

                        $file_path_encode = base64_encode($file_path);

                        $tableHtml = $tableHtml.'</table><input type="hidden" value="'.$fileType.'" name="type">';
                        $tableHtml = $tableHtml."<div class='card-footer'><button class='btn bg-gradient-info float-left' type='submit' name='confirm' value='".$file_path_encode."'><i class='fas fa-tools'></i>Confirm Upload</button>";
                        $tableHtml = $tableHtml."<button class='btn bg-gradient-danger float-right'  type='submit' name='cancel'><i class='fas fa-skull-crossbones'></i>Cancel</button></div>";
                        $tableHtml = $tableHtml.'</form>';

                        $data['tableHtml'] = $tableHtml;
                        $this->load->view("Travel_planner/Inc/show_import", $data);
                    }

                }

            }

            // User Confirmed Upload
            if(!is_null($this->input->post('confirm'))){

                // Decoding File Path
                $file_path = base64_decode($this->input->post('confirm'));

                // Initializing Reader Based On File Type
                if($this->input->post('type') == 'excel'){
                    $reader = new ReaderXlsx();
                    
                }elseif($this->input->post('type') == 'csv'){
                    $reader = new ReaderCsv();
                }else{
                    redirect(adminTravelPlannerUrl().'\hotel');
                }

                // Load file as SpreadSheet
                $reader->setReadDataOnly(true);
                $spreadsheet = $reader->load($file_path);

                // Initializing Constants
                $dataTitle = [];
                $dataArray = [];
                $dataIDX = 0;
                foreach ($spreadsheet->getActiveSheet()->toArray() as $idx=>$row) {
                    if($idx == 0){
                        // Checking if Sheet Contains Correct Data
                        $dataTitle[1]=$row[1]=='City'? 'city':exit;
                        $dataTitle[2]=$row[2]=='Hotel'? 'hotel':exit;
                        $dataTitle[3]=$row[3]=='Check-In'? 'checkIn':exit;
                        $dataTitle[4]=$row[4]=='Check-Out'? 'checkOut':exit;
                        continue;
                    }

                    // Storing Each data to respective Associative Array
                    foreach($row as $key=>$value){
                        if($key==0){
                            continue;
                        }
                        $dataArray[$dataIDX][$dataTitle[$key]] = $value;
                    }
                    $dataIDX++;
                }

                $successCount = 0;
                $successRow = array();
                foreach($dataArray as $row){
                    // Appending Data to DB using Model Method
                    if($this->hotel_model->store_stays($row)){
                        $successCount++;
                        $successRow[] = $row;
                    }

                }
                $tableHtml = '';
                // Generating Table only if Uploaded at least one
                if($successCount>0){

                    $tableHtml = "
                        <table id='hotel_table' class='table table-bordered table-striped'>
                            <thead>
                                <tr>
                                    <th>Sl No.</th>
                                    <th>City</th>
                                    <th>Hotel</th>
                                    <th>CheckIn</th>
                                    <th>CheckOut</th>
                                </tr>
                            </thead>
                    ";

                    $id = 1;
                    foreach ($successRow as $row) {
                        $tableHtml = $tableHtml."<tr>";
                        $tableHtml = $tableHtml."<td class='text-center'>".$id."</td>";
                        foreach ($row as $key => $value) {
                            if ($key == 'checkIn' || $key == 'checkOut') {
                                $tableHtml = $tableHtml."<td>" . date('d-M-Y', strtotime($value)) . "</td>";
                            } else {
                                $tableHtml = $tableHtml."<td>" . $value . "</td>";
                            }
                        }
                        $tableHtml = $tableHtml."</tr>";
                        $id++;
                    }

                    $tableHtml = $tableHtml.'</table>';
                }
                $tableHtml = $tableHtml.'<br><p>Note: Duplicate Entries are not Uploaded</p>';

                // Calling Alert
                $data['errorTitle'] = "Uploading Finished";
                $data['error'] = "$successCount Out of $dataIDX Uploaded";
                $data['warningHtml'] = $tableHtml;

                $this->load->view("Travel_planner\inc/warning",$data);

            }

            // User Cancelled Upload
            if(!is_null($this->input->post('cancel'))){

                $data['errorTitle'] = "Not Uploaded";
                $this->load->view("Travel_planner\inc/warning",$data);
            }
            
            if(!is_null($this->input->post('stay'))){
        
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