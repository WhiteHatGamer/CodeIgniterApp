<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class User_profile extends CI_Controller{

        public function __construct(){
            parent::__construct();
            $this->load->model("user_model");
            $this->load->library("session");
        }

        public function index(){

            // Checking If User is Logged In
            if(!$this->session->email){
                redirect(adminTravelPlannerUrl());
                return;
            }

            $data = $this->user_model->get_user_details($this->session->email);
            $this->load->view("admin/Travel_planner/inc/header");
            $this->load->view("admin/Travel_planner/Dashboard/Profile/index", $data);
            $this->load->view("admin/Travel_planner/inc/footer");
        }

        public function edit_profile(){
            
            // Checking If User is Logged In
            if(!$this->session->email){
                redirect(adminTravelPlannerUrl());
                return;
            }

            if($this->input->server('REQUEST_METHOD') == 'POST'){

                $config['upload_path']      = APPPATH."../uploads";
                $config['allowed_types']    = 'gif|jpg|png';

                $this->load->library('upload', $config);

                if($this->input->post('dltImg')){
                    
                    $data = $this->user_model->get_user_details($this->session->email);
                    if($data['image']){
                        $this->load->view("admin/Travel_planner/inc/confirm");
                    }else{
                        $data['errorTitle'] = "Sorry";
                        $data['error'] = "No Image Stored to Delete";
                        $this->load->view("admin/Travel_planner/inc/warning",$data);
                    }
                    
                }
                if($this->upload->do_upload('image')){

                    // Saving File into Database
                    $source = $this->upload->data()['full_path'];

                    $this->user_model->update_column("image", "LOAD_FILE('$source')");
                }
                if($this->input->post('confirmDlt')){
                    $source = 'C:/xampp/htdocs/CodeIgniterApp/assets/dist/img/default-user.png';
                    $this->user_model->update_column("image", "LOAD_FILE('$source')");
                }
                if($this->input->post('prefix')){
                    
                    $this->user_model->update_column("prefix", $this->input->post('prefix'));
                }
                if($this->input->post('name')){

                    $this->user_model->update_column("name", $this->input->post('name'));
                }
                if($this->input->post('number')){

                    $value = str_replace(' ','',$_POST['number']);
                    $this->user_model->update_column("number",$this->input->post('number'));
                }
                if($this->input->post('gender')){

                    $this->user_model->update_column("gender", $this->input->post('gender'));
                }
                if($this->input->post('dob')){

                    $this->user_model->update_column("dob", $this->input->post('dob'));
                }
                if($this->input->post('editSubmit')){

                    redirect(adminTravelPlannerUrl()."User_profile");
                }
            }
    
            $data = $this->user_model->get_user_details($this->session->email);
            $this->load->view("admin/Travel_planner/inc/header");
            $this->load->view("admin/Travel_planner/Dashboard/Profile/Edit_profile", $data);
            $this->load->view("admin/Travel_planner/inc/footer");
        }

        public function clear_session(){
            
            @session_start();
            session_unset();
            session_destroy();
            redirect(adminTravelPlannerUrl());
        }
    }

?>