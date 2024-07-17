<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
    use PhpOffice\PhpSpreadsheet\Writer\Pdf\Dompdf;
    use PhpOffice\PhpSpreadsheet\Writer\Csv;

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
            
            switch ($export) {

                case 'excel':
                    
                    $fileName = 'note.xlsx';
                    $writer = new Xlsx($spreadsheet);
                    $writer->save("uploads/".$fileName);
                    header("Content-Type: application/vnd.ms-excel");
                    redirect(base_url()."uploads/".$fileName);
                    break;
                    
                case 'pdf':
                    
                    // instantiate and use the dompdf class
                    $fileName = 'note.pdf';
                    $writer = new Dompdf($spreadsheet);
                    $writer->save("uploads/".$fileName);
                    $filePath = "uploads/".$fileName;
                    header('Content-Disposition: attachment; filename="note.pdf"');
                    header("Content-Type: application/download");
                    header('Content-Description: File Transfer;');
                    header("Content-Length: " . filesize($filePath));
                    readfile($filePath);
                    break;

                case 'csv':
                        
                    // instantiate and use the dompdf class
                    $fileName = 'note.csv';
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

        public function create(){
            // Checking If User is Logged In
            if(!$this->session->email){
              redirect(adminTravelPlannerUrl());
                return;
            }
            $this->load->view("Travel_planner\inc/header");

            if($this->input->post('submit')){
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

            if($this->input->post('submit')){
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
            if($this->input->post('confirmDlt')){

                if($this->note_model->delete_note()){
                    
                    $this->load->view("Travel_planner\inc/deleted");
                }else{
                    
                    $data['errorTitle'] = "Note Not Deleted";
                    $data['error'] = "Please Check ID";
                    $this->load->view("Travel_planner\inc/warning",$data);
                }

            }
            if($this->input->post('submit')){
                
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