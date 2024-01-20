<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');  
    
    class pages extends CI_Controller{

        public function __construct(){

            parent::__construct();
            $this->load->helper("url_helper");
        }

        public function index(){

            $this->load->view('admin/dashboard');
        }

        public function view($site = "dashboard"){

            // Checking if file Available
            $requestedFile = APPPATH.'views/admin/'.$site.".php";
            if(!file_exists($requestedFile)){

                // Page doesn't Exists
                show_404();
            }

            $this->load->view('admin/'.$site);
        }

    }
?>