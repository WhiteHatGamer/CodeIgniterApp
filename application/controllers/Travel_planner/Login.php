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
    
            // Check if User Exists
            $User_valid = $this->user_model->Validate_user($email, $password);
            if($User_valid){
            
                // Authentication Successful
                
                // Starting Session
                @session_start(); //Error Check for Already Started Session.

                if(NULL != $this->input->post('remember')){
                    $_SESSION['remember'] = true;
                }
                $_SESSION['email'] = $email;

                $CookieName = $_SERVER['REMOTE_ADDR'];
                $CookieValue = md5((isset($_SESSION['name']))? $_SESSION['name']:$_SESSION['email']);
          
                // Setting Cookie
                
                // Checking if Same User
                if(isset($_COOKIE[$CookieName])){
                  if($CookieValue == $_COOKIE[$CookieName]){
                    // Previous User
                    @setcookie(md5('back'), 1, time() + (86400*30),'/');
                  }else{
                    // New User
                    @setcookie(md5('back'), 0, time() + (86400*30),'/');
                    @setcookie($CookieName, $CookieValue, time() + (86400*30),'/');
                  }
                }

                header("Location: ".adminTravelPlannerUrl()."Dashboard");
            }else{

                // Authentication Not Successful
                $this->load->view("Travel_planner/inc/header");
                $this->load->view("Travel_planner/inc/invalid_user");
                $this->load->view('Travel_planner/index');
                $this->load->view("Travel_planner/inc/footer");
            }
        }
    }
?>