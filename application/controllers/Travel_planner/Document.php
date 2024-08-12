<?php

use FontLib\Table\Type\post;

    defined("BASEPATH") OR exit("Direct access not Allowed");

    class Document extends CI_Controller{

        public function __construct(){
            parent::__construct();
            $this->load->model('document_model');
            $this->load->library(array('session','table'));
        }

        public function index(){

            // Checking If User is Logged In
            if(!$this->session->email){
                redirect(adminTravelPlannerUrl());
                return;
            }


            $data['result'] = $this->document_model->getImages();

            $this->load->view("Travel_planner/inc/header");
            $this->load->view("Travel_planner/Dashboard/Document/gallery", $data);
            $this->load->view("Travel_planner/inc/footer");
        }
        
    }
    