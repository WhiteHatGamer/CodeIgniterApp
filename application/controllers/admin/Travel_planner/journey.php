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
                $this->load->view("admin\Travel_planner\inc/header");
                $this->load->view("admin\Travel_planner\inc/no_data_journey");
                $this->load->view("admin\Travel_planner\inc/footer");
            }else{
                
                $data['result']=$result;
                // Details Available
                $this->load->view("admin\Travel_planner\inc/header");
                $this->load->view("admin\Travel_planner\Dashboard\ShowTrips\index",$data);
                $this->load->view("admin\Travel_planner\inc/footer");
            }
        }

        
        public function plan(){
            
            // Checking If User is Logged In
            if(!$this->session->email){
                redirect(adminTravelPlannerUrl());
                return;
            }

            $this->load->view("admin\Travel_planner\inc/header");
            if($this->input->server('REQUEST_METHOD')=='POST'){
                try{
                    $this->journey_model->insert_trip();

                    $this->load->view("admin\Travel_planner\inc\saved");
                }catch(Exception $e){
        
                    // Catching Exception
                    $data['errorTitle'] = "Journey Not Saved";
                    $data['error'] = "Duplicate Journey Time Not Possible";
                    $this->load->view("admin\Travel_planner\inc\warning",$data);
                }
            }
            $this->load->view("admin\Travel_planner\Dashboard\PlanTrip\index");
            $this->load->view("admin\Travel_planner\inc/footer");
        }
        
        public function edit(){

            // Checking If User is Logged In
            if(!$this->session->email){
                redirect(adminTravelPlannerUrl());
                return;
            }
            $result = $this->journey_model->get_trips();

            $this->load->view("admin\Travel_planner\inc/header");
            
            if($this->input->post('edit')){
                $edit = $this->journey_model->get_trip($this->input->post('edit'));
                $data['result']=$result;
                $data['edit']=$edit[0];
                $this->load->view("admin\Travel_planner\Dashboard\EditTrip\index", $data);
                $this->load->view("admin\Travel_planner\inc/footer");
                return;

            }

            if($this->input->post('delete')){
                $delete = $this->journey_model->get_trip($this->input->post('delete'));
                $data['result']=$result;
                $data['delete']=$delete[0];
                $this->load->view("admin\Travel_planner\Dashboard\EditTrip\index", $data);
                $this->load->view("admin\Travel_planner\inc/footer");
                return;

            }

            if($this->input->post('confirm_edit')){
                $this->journey_model->update_trip();
                $this->load->view("admin\Travel_planner\inc\saved");
            }

            if($this->input->post('confirm_delete')){
                $deleted = $this->journey_model->delete_trip();
                if($deleted){
                    $this->load->view("admin\Travel_planner\inc\deleted");
                }
            }

            $result = $this->journey_model->get_trips();
            if(!$result){
                // No Data Stored
                $this->load->view("admin\Travel_planner\inc/no_data_journey");
                $this->load->view("admin\Travel_planner\inc/footer");
            }else{

                $data['result']=$result;
                // Details Available
                $this->load->view("admin\Travel_planner\Dashboard\EditTrip\index", $data);
                $this->load->view("admin\Travel_planner\inc/footer");
            }
        }
        
    }