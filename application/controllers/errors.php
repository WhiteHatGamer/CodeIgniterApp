<?php

    defined('BASEPATH') OR exit('No direct script access allowed');  

    class Errors extends CI_Controller{
        
        public function index(){

            $data['title'] = "home";
            $this->load->view('templates/header', $data);
            $this->load->view('templates/404');
            $this->load->view('templates/footer');
        }

        public function page_missing(){

            $data['title'] = "home";
            $this->load->view('templates/header', $data);
            $this->load->view('templates/404');
            $this->load->view('templates/footer');
        }
    }