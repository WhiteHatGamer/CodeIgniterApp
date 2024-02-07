<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
    use PhpOffice\PhpSpreadsheet\Writer\Pdf\Dompdf;
    use PhpOffice\PhpSpreadsheet\Writer\Csv;

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

                    $this->load->view("admin\Travel_planner\inc\saved");
                }else{
                    $data['errorTitle'] = "Not Saved";
                    $data['error'] = "Unable To Update Details";
                    $this->load->view("admin\Travel_planner\inc\warning",$data);
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
                    $this->load->view("admin\Travel_planner\inc\deleted");
                }else{
                    
                    redirect(adminTravelPlannerUrl().'hotel/');
                }
            }

            $result = $this->hotel_model->get_stays();
            if(!$result){
                // No Data Stored
                $this->load->view("admin\Travel_planner\inc/header");
                $this->load->view("admin\Travel_planner\inc/no_data_hotel");
                $this->load->view("admin\Travel_planner\inc/footer");
            }else{
                
                $data['result']=$result;
                // Details Available
                $this->load->view("admin\Travel_planner\inc/header");
                $this->load->view("admin\Travel_planner\Dashboard\ListStays\index",$data);
                $this->load->view("admin\Travel_planner\inc/footer");
            }
        }
        public function appoint(){

            // Checking If User is Logged In
            if(!$this->session->email){
                redirect(adminTravelPlannerUrl());
                return;
            }
            
            if(isset($_POST['stay'])){
        
                try {
        
                    // Insertion Query
                    if($this->hotel_model->store_stays()){
                        
                        // If success Show Toast Animation
                        $this->load->view("admin\Travel_planner\inc\saved");
                    }
                    

                } catch (\Throwable $th) {
        
                    // Catches Exception
                    $data['errorTitle'] = "Error Occurred";
                    $data['error'] = $th->getMessage();
                    $this->load->view("admin\Travel_planner\inc\warning", $data);
                    return;
                }
            }
            
            $this->load->view("admin\Travel_planner\inc/header");
            $this->load->view("admin\Travel_planner\Dashboard\AppointHotel/index");
            $this->load->view("admin\Travel_planner\inc/footer");
        }
    }