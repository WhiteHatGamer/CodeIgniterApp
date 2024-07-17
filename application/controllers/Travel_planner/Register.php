<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Register extends CI_Controller{
        
        public function __construct(){
                
            parent::__construct();
            $this->load->model("user_model");
        }

        public function index(){
            
            // Checking If User is Logged In
            if($this->session->email){
                redirect(adminTravelPlannerUrl());
                return;
            }
            
            $this->load->view('Travel_planner/inc/header');
            $this->load->view('Travel_planner/Register/index');
            $this->load->view("Travel_planner/inc/footer");

        }

        public function action(){

            $this->load->view("Travel_planner/inc/header");

            $email = htmlspecialchars($this->input->post('email'));
            $password = htmlspecialchars($this->input->post('password'));
            $name = htmlspecialchars($this->input->post('name'));

            // Checking if User Already Exists
            $result = $this->user_model->get_user_details($email);
            if($result){

                $this->load->view("Travel_planner/Register/error");
            }else{
                
                $result = $this->user_model->register_user();
                if($result){
                    
                    $this->load->view("Travel_planner/Register/success");
                }else{
                    
                    $this->load->view("Travel_planner/Register/error");
                }
            }
            $this->load->view('Travel_planner/Register/index');
            
            $this->load->view("Travel_planner/inc/footer");

        }
        
    }
?>