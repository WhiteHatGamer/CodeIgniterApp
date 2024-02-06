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
                $this->load->view("admin\Travel_planner\inc/header");
                $this->load->view("admin\Travel_planner\inc/no_data_note");
                $this->load->view("admin\Travel_planner\inc/footer");
            }else{
                
                $data['result']=$result;
                // Details Available
                $this->load->view("admin\Travel_planner\inc/header");
                $this->load->view("admin\Travel_planner\Dashboard\ReadNote\index",$data);
                $this->load->view("admin\Travel_planner\inc/footer");
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
        public function create(){
            // Checking If User is Logged In
            if(!$this->session->email){
              redirect(adminTravelPlannerUrl());
                return;
            }
            $this->load->view("admin\Travel_planner\inc/header");

            if($this->input->post('submit')){
                if($this->note_model->insert_note()){
                    $this->load->view('admin/Travel_planner/inc/saved');
                }
            }
            
            $this->load->view("admin\Travel_planner\Dashboard\CreateNote\index");
            $this->load->view("admin\Travel_planner\inc/footer");
        }

    }

?>