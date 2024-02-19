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
    }