<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Users extends CI_Controller{

        public function __construct(){
            parent::__construct();
            $this->load->model('user_model');
            $this->load->library('session');
        }

        public function index(){
            // Checking if User is Authorized
            checkUserRole($this->session->user_type);

            // Checking If User is Logged In
            if(!$this->session->email){
                redirect(adminTravelPlannerUrl());
                return;
            }
            
            $result = $this->user_model->get_users();
                $data['users']=$result;
                $this->load->view("Travel_planner\inc/header");
                $this->load->view("Travel_planner\Dashboard\Users\index",$data);
                $this->load->view("Travel_planner\inc/footer");
        }

    }