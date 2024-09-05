<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    require_once('vendor/autoload.php');
    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Reader\Csv as ReaderCsv;
    use PhpOffice\PhpSpreadsheet\Reader\Xls;
    use PhpOffice\PhpSpreadsheet\Reader\Xlsx as ReaderXlsx;
    use PhpOffice\PhpSpreadsheet\Writer\Html as WriterHtml;
    use PhpOffice\PhpSpreadsheet\Writer\Xls as WriterXls;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
    use PhpOffice\PhpSpreadsheet\Writer\Pdf\Dompdf;
    use PhpOffice\PhpSpreadsheet\Writer\Csv;
    use PhpParser\Node\Stmt\Catch_;
    

    class Journey extends CI_Controller{

        public function __construct(){
            parent::__construct();
            $this->load->model('journey_model');
            $this->load->library('session');
        }

        public function index(){

            // Checking If User is Logged In
            if(!$this->session->email){
              redirect(adminTravelPlannerUrl());
                return;
            }
            
            $result = $this->journey_model->get_trips();
            if(!$result){
                // No Data Stored
                $this->load->view("Travel_planner\inc/header");
                $this->load->view("Travel_planner\inc/no_data_journey");
                $this->load->view("Travel_planner\inc/footer");
            }else{
                
                $data['result']=$result;
                // Details Available
                $this->load->view("Travel_planner\inc/header");
                $this->load->view("Travel_planner\Dashboard\ShowTrips\index",$data);
                $this->load->view("Travel_planner\inc/footer");
            }
        }

        public function export_table($export){

            $journey_data = $this->journey_model->get_trips();

            $spreadsheet = new Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();

            // $styleArray = [
            //     'borders' => [
            //         'allBorders' => ['borderStyle' => 'BORDER_THICK', 'color' => ['argb' => 'F0F0F0F0']],
            //     ],
            // ];
            // $sheet->getStyle('A1:C1')->applyFromArray($styleArray);
            
            $sheet->setCellValue('A1', 'Sl. No');
            $sheet->setCellValue('B1', 'Source');
            $sheet->setCellValue('C1', 'Destination');
            $sheet->setCellValue('D1', 'Way');
            $sheet->setCellValue('E1', 'Journey');
            $sheet->setCellValue('F1', 'Return');
            $rows = 2;
            foreach ($journey_data as $val){
                $sheet->setCellValue('A' . $rows, ($rows-1));
                $sheet->setCellValue('B' . $rows, $val['source']);
                $sheet->setCellValue('C' . $rows, $val['destination']);
                $sheet->setCellValue('D' . $rows, $val['way']);
                $sheet->setCellValue('E' . $rows, $val['journey']);
                $sheet->setCellValue('F' . $rows, $val['round']);
                $rows++;
            }
            $sheet->getColumnDimension('A')->setAutoSize(true);
            $sheet->getColumnDimension('B')->setAutoSize(true);
            $sheet->getColumnDimension('C')->setAutoSize(true);
            $sheet->getColumnDimension('D')->setAutoSize(true);
            $sheet->getColumnDimension('E')->setAutoSize(true);
            $sheet->getColumnDimension('F')->setAutoSize(true);
            
            // Create Directory if not exists
            $uploadsDir = 'assets/uploads/';
            if (!file_exists($uploadsDir)) {
                mkdir($uploadsDir, 0777, true);
            }

            switch ($export) {

                case 'excel':
                    
                    $fileName = $uploadsDir.'journey.xlsx';
                    $writer = new Xlsx($spreadsheet);
                    $writer->save($fileName);
                    header("Content-Type: application/vnd.ms-excel");
                    redirect(base_url().$fileName);
                    break;
                    
                case 'pdf':
                    
                    // instantiate and use the dompdf class
                    $fileName = $uploadsDir.'journey.pdf';
                    $writer = new Dompdf($spreadsheet);
                    $writer->save($fileName);
                    $filePath = $fileName;
                    header('Content-Disposition: attachment; filename="journey.pdf"');
                    header("Content-Type: application/download");
                    header('Content-Description: File Transfer;');
                    header("Content-Length: " . filesize($filePath));
                    readfile($filePath);
                    break;

                case 'csv':
                        
                    // instantiate and use the dompdf class
                    $fileName = $uploadsDir.'journey.csv';
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
        
        public function plan(){
            
            // Checking If User is Logged In
            if(!$this->session->email){
                redirect(adminTravelPlannerUrl());
                return;
            }

            if(!is_null($this->input->post('submit'))){
                // Verifying File
                $canRead = 1;
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
                        $reader->setReadDataOnly(true);
                        $spreadsheet = $reader->load($_FILES['csv']['tmp_name']);
                    }
                }else{
                    redirect(adminTravelPlannerUrl().'\journey');
                }

                
                // run code if only Readable
                if($canRead){
                    $dataTitle = [];
                    $dataArray = [];
                    $dataIDX = 0;
                    foreach ($spreadsheet->getActiveSheet()->toArray() as $idx=>$row) {
                        if($idx == 0){
                            // Check if importing file has Wrong Data
                            if($idx == 0){
                                if($row[1]!='Source'){
                                    $wrongFile = true;
                                    break;
                                }
                            }
                            $dataTitle[1]=$row[1]=='Source'? 'source':exit;
                            $dataTitle[2]=$row[2]=='Destination'? 'destination':exit;
                            $dataTitle[3]=$row[3]=='Way'? 'way':exit;
                            $dataTitle[4]=$row[4]=='Journey'? 'journey':exit;
                            $dataTitle[5]=$row[5]=='Return'? 'round':exit;
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
                    
                    // Show Error Alert if Wrong Data
                    if(isset($wrongFile)){
                        $data['errorTitle'] = "Not Imported";
                        $data['error'] = "Wrong Data Format";
                        $data['warningHtml'] = '<p>Try to Import In the same Data Types and Formats</p><button class="btn btn-info" onClick="window.location.href=window.location.href">Refresh Page to Try Again</button>';
        
                        $this->load->view("Travel_planner\inc/danger",$data);

                    }else{
                        $successRow = 0;
                        $writer = new WriterHtml($spreadsheet);
        
                        $writer->generateHTMLHeader();
        
                        $dataHtml = $writer->generateHtmlAll();
                        echo $dataHtml;
        
                        $writer->generateHTMLFooter();
        
                        foreach($dataArray as $row){
                            if($this->journey_model->insert_trips($row)){
                                $successRow++;
                            }
                        }
                        $data['errorTitle'] = "Uploading Finished";
                        $data['error'] = "$successRow Out of $dataIDX Uploaded";
                        $data['warningHtml'] = '<p>Note: Duplicate Entries are not Uploaded</p>';
        
                        $this->load->view("Travel_planner\inc/warning",$data);
                    }

                }

            }

            if(!is_null($this->input->post('plan'))){
                try{
                    $this->journey_model->insert_trip();

                    $this->load->view("Travel_planner\inc\saved");
                }catch(Exception $e){
        
                    // Catching Exception
                    $data['errorTitle'] = "Journey Not Saved";
                    $data['error'] = "Duplicate Journey Time Not Possible";
                    $this->load->view("Travel_planner\inc\warning",$data);
                }
            }
            
            $this->load->view("Travel_planner\inc/header");
            $this->load->view("Travel_planner\Dashboard\PlanTrip\index");
            $this->load->view("Travel_planner\inc/footer");
        }
        
        public function edit(){

            // Checking If User is Logged In
            if(!$this->session->email){
                redirect(adminTravelPlannerUrl());
                return;
            }
            $result = $this->journey_model->get_trips();

            $this->load->view("Travel_planner\inc/header");
            
            if(!is_null($this->input->post('edit'))){
                $edit = $this->journey_model->get_trip($this->input->post('edit'));
                $data['result']=$result;
                $data['edit']=$edit[0];
                $this->load->view("Travel_planner\Dashboard\EditTrip\index", $data);
                $this->load->view("Travel_planner\inc/footer");
                return;

            }

            if(!is_null($this->input->post('delete'))){
                $delete = $this->journey_model->get_trip($this->input->post('delete'));
                $data['result']=$result;
                $data['delete']=$delete[0];
                $this->load->view("Travel_planner\Dashboard\EditTrip\index", $data);
                $this->load->view("Travel_planner\inc/footer");
                return;

            }

            if(!is_null($this->input->post('confirm_edit'))){
                $this->journey_model->update_trip();
                $this->load->view("Travel_planner\inc\saved");
            }

            if(!is_null($this->input->post('confirm_delete'))){
                $deleted = $this->journey_model->delete_trip();
                if($deleted){
                    $this->load->view("Travel_planner\inc\deleted");
                }
            }

            $result = $this->journey_model->get_trips();
            if(!$result){
                // No Data Stored
                $this->load->view("Travel_planner\inc/no_data_journey");
                $this->load->view("Travel_planner\inc/footer");
            }else{

                $data['result']=$result;
                // Details Available
                $this->load->view("Travel_planner\Dashboard\EditTrip\index", $data);
                $this->load->view("Travel_planner\inc/footer");
            }
        }
        
    }