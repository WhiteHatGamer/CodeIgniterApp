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


        public function clear_session(){
            
            @session_start();
            session_unset();
            session_destroy();
            redirect(adminTravelPlannerUrl());
        }
    }

?>