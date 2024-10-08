<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class User_profile extends CI_Controller{

        public function __construct(){
            parent::__construct();
            $this->load->model("user_model");
            $this->load->library("session");
            $this->load->helper('form', 'url');
        }

        public function index(){

            // Checking If User is Logged In
            if(!$this->session->email){
                redirect(adminTravelPlannerUrl());
                return;
            }

            $data = $this->user_model->get_user_details($this->session->email);
            $this->load->view("Travel_planner/inc/header");
            $this->load->view("Travel_planner/Dashboard/Profile/index", $data);
            $this->load->view("Travel_planner/inc/footer");
        }

        public function edit_profile(){
            
            // Checking If User is Logged In
            if(!$this->session->email){
                redirect(adminTravelPlannerUrl());
                return;
            }

            if($this->input->server('REQUEST_METHOD') == 'POST'){

                $config['upload_path']      = FCPATH."assets/uploads";
                $config['allowed_types']    = 'gif|jpg|jpeg|png';

                $this->load->library('upload', $config);

                if(!is_null($this->input->post('dltImg'))){
                    
                    $data = $this->user_model->get_user_details($this->session->email);
                    if($data['image']){
                        $this->load->view("Travel_planner/inc/confirm");
                    }else{
                        $data['errorTitle'] = "Sorry";
                        $data['error'] = "No Image Stored to Delete";
                        $this->load->view("Travel_planner/inc/warning",$data);
                    }
                    
                }
                if($this->upload->do_upload('image')){
                    // Saving File into Database
                    $source = $this->upload->data()['full_path'];

                    $this->user_model->update_column("image", "LOAD_FILE('$source')");
                }
                if(!is_null($this->input->post('confirmDlt'))){
                    $source = 'C:/xampp/htdocs/CodeIgniterApp/assets/dist/img/default-user.png';
                    $this->user_model->update_column("image", "LOAD_FILE('$source')");
                }
                if(!is_null($this->input->post('prefix'))){
                    
                    $this->user_model->update_column("prefix", $this->input->post('prefix'));
                }
                if(!is_null($this->input->post('name'))){

                    $this->user_model->update_column("name", $this->input->post('name'));
                }
                if(!is_null($this->input->post('number'))){

                    $value = str_replace(' ','',$this->input->post('number'));
                    $this->user_model->update_column("number",$this->input->post('number'));
                }
                if(!is_null($this->input->post('gender'))){

                    $this->user_model->update_column("gender", $this->input->post('gender'));
                }
                if(!is_null($this->input->post('dob'))){

                    $this->user_model->update_column("dob", $this->input->post('dob'));
                }
                if(!is_null($this->input->post('editSubmit'))){

                    redirect(adminTravelPlannerUrl()."User_profile");
                }
            }
    
            $data = $this->user_model->get_user_details($this->session->email);
            $this->load->view("Travel_planner/inc/header");
            $this->load->view("Travel_planner/Dashboard/Profile/Edit_profile", $data);
            $this->load->view("Travel_planner/inc/footer");
        }

        public function password(){

            // Checking If User is Logged In
            if(!$this->session->email){
                redirect(adminTravelPlannerUrl());
                return;
            }
            // Checking If Submitted
            if($this->input->server('REQUEST_METHOD') == 'POST'){
                $changeFlag = $this->user_model->update_column('password', $this->input->post('NewPassword'));
                if($changeFlag === 'wrongPassword'){

                    $data['errorTitle'] = 'Wrong Password';
                    $data['error'] = 'Unable to Update Password';
                    $this->load->view("Travel_planner/inc/warning",$data);
                }else{
                    
                    $_POST['PasswordChanged'] = true;
                    $this->clear_session();
                }
            }
    
            $this->load->view("Travel_planner/inc/header");
            $this->load->view("Travel_planner/Dashboard/Profile/Password");
            $this->load->view("Travel_planner/inc/footer");
        }

        public function clear_session(){
            
            @session_start();
            session_unset();
            session_destroy();
            redirect(adminTravelPlannerUrl());
        }
    }

?>