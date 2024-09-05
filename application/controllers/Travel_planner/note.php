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

    class Note extends CI_Controller{

        public function __construct(){
            parent::__construct();
            $this->load->model('note_model');
            $this->load->library('session');
        }

        public function index(){
            // Checking If User is Logged In
            if(!$this->session->email){
              redirect(adminTravelPlannerUrl());
                return;
            }
            
            $result = $this->note_model->get_notes();
            if(!$result){
                // No Data Stored
                $this->load->view("Travel_planner\inc/header");
                $this->load->view("Travel_planner\inc/no_data_note");
                $this->load->view("Travel_planner\inc/footer");
            }else{
                
                $data['result']=$result;
                // Details Available
                $this->load->view("Travel_planner\inc/header");
                $this->load->view("Travel_planner\Dashboard\ReadNote\index",$data);
                $this->load->view("Travel_planner\inc/footer");
            }
        }

        public function get_note($id = false){
            // Checking If User is Logged In
            if(!$this->session->email){
                redirect(adminTravelPlannerUrl());
                    return;
            }

            $result = $this->note_model->get_note($id);
            if($result){
                echo $result[0]['note'];
            }else{
                return;
            }
        }

        public function export_table($export){

            $note_data = $this->note_model->get_notes();

            $spreadsheet = new Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();

            // $styleArray = [
            //     'borders' => [
            //         'allBorders' => ['borderStyle' => 'BORDER_THICK', 'color' => ['argb' => 'F0F0F0F0']],
            //     ],
            // ];
            // $sheet->getStyle('A1:C1')->applyFromArray($styleArray);
            
            $sheet->setCellValue('A1', 'Sl. No');
            $sheet->setCellValue('B1', 'Modified Time');
            $sheet->setCellValue('C1', 'Note');
            $rows = 2;
            foreach ($note_data as $val){
                $sheet->setCellValue('A' . $rows, ($rows-1));
                $sheet->setCellValue('B' . $rows, $val['create_time']);
                $sheet->setCellValue('C' . $rows, $val['note']);
                $rows++;
            }
            $sheet->getColumnDimension('A')->setAutoSize(true);
            $sheet->getColumnDimension('B')->setAutoSize(true);
            $sheet->getColumnDimension('C')->setAutoSize(true);
            
            // Create Directory if not exists
            $uploadsDir = 'assets/uploads/';
            if (!file_exists($uploadsDir)) {
                mkdir($uploadsDir, 0777, true);
            }

            switch ($export) {

                case 'excel':
                    
                    $fileName = $uploadsDir.'note.xlsx';
                    $writer = new Xlsx($spreadsheet);
                    $writer->save($fileName);
                    header("Content-Type: application/vnd.ms-excel");
                    redirect(base_url().$fileName);
                    break;
                    
                case 'pdf':
                    
                    // instantiate and use the dompdf class
                    $fileName = $uploadsDir.'note.pdf';
                    $writer = new Dompdf($spreadsheet);
                    $writer->save($fileName);
                    $filePath = $fileName;
                    header('Content-Disposition: attachment; filename="note.pdf"');
                    header("Content-Type: application/download");
                    header('Content-Description: File Transfer;');
                    header("Content-Length: " . filesize($filePath));
                    readfile($filePath);
                    break;

                case 'csv':
                        
                    // instantiate and use the dompdf class
                    $fileName = $uploadsDir.'note.csv';
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

        public function create(){
            // Checking If User is Logged In
            if(!$this->session->email){
              redirect(adminTravelPlannerUrl());
                return;
            }

            if(!is_null($this->input->post('import'))){
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
                            if($row[1]!='Modified Time'){
                                $wrongFile = true;
                                break;
                            }
                            $dataTitle[1]=$row[1]=='Modified Time'? 'create_time':exit;
                            $dataTitle[2]=$row[2]=='Note'? 'note':exit;
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
                    
                    if(isset($wrongFile)){
                        $data['errorTitle'] = "Not Imported";
                        $data['error'] = "Wrong Data Format";
                        $data['warningHtml'] = '<p>Try to Import In the same Data Types and Formats</p><br><button class="btn btn-info" onClick="window.location.href=window.location.href">Refresh Page to Try Again</button>';
        
                        $this->load->view("Travel_planner\inc/danger",$data);

                    }else{
                            
                        $successRow = 0;
                        $writer = new WriterHtml($spreadsheet);
        
                        $writer->generateHTMLHeader();
        
                        $dataHtml = $writer->generateHtmlAll();
                        echo $dataHtml;
        
                        $writer->generateHTMLFooter();
        
                        foreach($dataArray as $row){
                            if($this->note_model->insert_notes($row)){
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
            $this->load->view("Travel_planner\inc/header");

            if(!is_null($this->input->post('submit'))){
                if($this->note_model->insert_note()){
                    $this->load->view('Travel_planner/inc/saved');
                }
            }
            
            $this->load->view("Travel_planner\Dashboard\CreateNote\index");
            $this->load->view("Travel_planner\inc/footer");
        }

        public function update(){
            // Checking If User is Logged In
            if(!$this->session->email){
              redirect(adminTravelPlannerUrl());
                return;
            }

            $this->load->view("Travel_planner\inc/header");

            if(!is_null($this->input->post('submit'))){
                if($this->note_model->update_note()){
                    
                    $this->load->view("Travel_planner\inc/saved");
                }else{
                    $data['errorTitle'] = "Not Saved";
                    $data['error'] = "Couldn't Update Note";
                    $this->load->view("Travel_planner\inc/warning", $data);
                }
            }
            
            $result = $this->note_model->get_notes();
            if(!$result){

                // No Data Stored
                $this->load->view("Travel_planner\inc/no_data_note");
            }else{
                
                // Details Available
                $data['result']=$result;
                $this->load->view("Travel_planner\Dashboard\UpdateNote\index",$data);
            }

            $this->load->view("Travel_planner\inc/footer");
        }

        public function delete(){

            // Checking If User is Logged In
            if(!$this->session->email){
              redirect(adminTravelPlannerUrl());
                return;
            }

            $this->load->view("Travel_planner\inc/header");
            
            // Checking if Submitted Already
            if(!is_null($this->input->post('confirmDlt'))){

                if($this->note_model->delete_note()){
                    
                    $this->load->view("Travel_planner\inc/deleted");
                }else{
                    
                    $data['errorTitle'] = "Note Not Deleted";
                    $data['error'] = "Please Check ID";
                    $this->load->view("Travel_planner\inc/warning",$data);
                }

            }
            if(!is_null($this->input->post('submit'))){
                
                $data['value'] = $this->input->post('id');
                if($this->note_model->get_note($data['value'])){

                    $this->load->view("Travel_planner/inc/confirm",$data);
                }else{
                    
                    $data['errorTitle'] = "Note Not Deleted";
                    $data['error'] = "Please Check ID";
                    $this->load->view("Travel_planner\inc/warning",$data);

                }
                // CREATING  DELETE  NOTE  CONFIRMATION
            }
            
            $result = $this->note_model->get_notes();
            if(!$result){

                // No Data Stored
                $this->load->view("Travel_planner\inc/no_data_note");
            }else{
                
                $data['result']=$result;
                // Details Available
                $this->load->view("Travel_planner\Dashboard\DeleteNote\index",$data);
            }

            $this->load->view("Travel_planner\inc/footer");
        }
    }

?>