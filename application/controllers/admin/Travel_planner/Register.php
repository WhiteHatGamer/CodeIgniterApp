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
            
            $this->load->view('admin/Travel_planner/inc/header');
            $this->load->view('admin/Travel_planner/Register/index');
            $this->load->view("admin/Travel_planner/inc/footer");

        }

    }
?>