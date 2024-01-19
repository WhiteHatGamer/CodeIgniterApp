<?php

    defined('BASEPATH') OR exit('No direct script access allowed');  

    class Pages extends CI_Controller{

        
        public function index(){

            $data['title'] = "home";
            $this->load->view('templates/header', $data);
            $this->load->view('pages/home');
            $this->load->view('templates/footer');
        }

        public function view($page = 'home'){
            
            $requestedFile = APPPATH.'views/pages/'.$page.'.php'; 
            if(!file_exists($requestedFile)){

                // Page doesn't Exists
                show_404();
            }

            $data['title'] = ucfirst($page);

            $this->load->view('templates/header',$data);
            $this->load->view('pages/'.$page,$data);
            $this->load->view('templates/footer',$data);
        }
    }