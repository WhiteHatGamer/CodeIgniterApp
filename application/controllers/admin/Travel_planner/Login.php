<?php

    defined('BASEPATH') OR exit('No direct script access allowed');  

    class Login extends CI_Controller{

        public function __construct(){
            
            parent::__construct();
            $this->load->model("user_model");
        }

        public function index(){
            
            redirect(adminTravelPlannerUrl());
        }

        public function validate(){
            
            if(isset($_POST['login'])){
                // Test Login
                $email = 'abc@example.com';
                $password = 'abc';
                $_POST['remember'] = 1;
            }else{

                $email = htmlspecialchars($this->input->post('email'));
                $password = htmlspecialchars($this->input->post('password'));
            }
        }
    }
?>