<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
    use PhpOffice\PhpSpreadsheet\Writer\Pdf\Dompdf;
    use PhpOffice\PhpSpreadsheet\Writer\Csv;

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
            
            switch ($export) {

                case 'excel':
                    
                    $fileName = 'journey.xlsx';
                    $writer = new Xlsx($spreadsheet);
                    $writer->save("uploads/".$fileName);
                    header("Content-Type: application/vnd.ms-excel");
                    redirect(base_url()."uploads/".$fileName);
                    break;
                    
                case 'pdf':
                    
                    // instantiate and use the dompdf class
                    $fileName = 'journey.pdf';
                    $writer = new Dompdf($spreadsheet);
                    $writer->save("uploads/".$fileName);
                    $filePath = "uploads/".$fileName;
                    header('Content-Disposition: attachment; filename="journey.pdf"');
                    header("Content-Type: application/download");
                    header('Content-Description: File Transfer;');
                    header("Content-Length: " . filesize($filePath));
                    readfile($filePath);
                    break;

                case 'csv':
                        
                    // instantiate and use the dompdf class
                    $fileName = 'journey.csv';
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
        
        public function plan(){
            
            // Checking If User is Logged In
            if(!$this->session->email){
                redirect(adminTravelPlannerUrl());
                return;
            }

            $this->load->view("Travel_planner\inc/header");
            if($this->input->server('REQUEST_METHOD')=='POST'){
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
            
            if($this->input->post('edit')){
                $edit = $this->journey_model->get_trip($this->input->post('edit'));
                $data['result']=$result;
                $data['edit']=$edit[0];
                $this->load->view("Travel_planner\Dashboard\EditTrip\index", $data);
                $this->load->view("Travel_planner\inc/footer");
                return;

            }

            if($this->input->post('delete')){
                $delete = $this->journey_model->get_trip($this->input->post('delete'));
                $data['result']=$result;
                $data['delete']=$delete[0];
                $this->load->view("Travel_planner\Dashboard\EditTrip\index", $data);
                $this->load->view("Travel_planner\inc/footer");
                return;

            }

            if($this->input->post('confirm_edit')){
                $this->journey_model->update_trip();
                $this->load->view("Travel_planner\inc\saved");
            }

            if($this->input->post('confirm_delete')){
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