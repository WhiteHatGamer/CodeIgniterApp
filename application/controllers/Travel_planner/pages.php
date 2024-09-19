<?php

    defined('BASEPATH') OR exit('No direct script access allowed');  
    
    class pages extends CI_Controller{

        public function __construct(){
            
            parent::__construct();
            $this->load->library('session');
            $this->load->model('user_model');
        }

        public function index(){

            @session_start();

            if($this->input->server('REQUEST_METHOD')=='POST'){

                if(!is_null($this->input->post('login'))){
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
                    $user = $this->user_model->get_user_details($email);
                    // $this->session->set_userdata($user);
                    
                    // Starting Session
                    @session_start(); //Error Check for Already Started Session.
    
                    if(NULL != $this->input->post('remember')){
                        $_SESSION['remember'] = true;
                    }
                    $_SESSION['email'] = $user["email"];
                    $_SESSION['user_type'] = $user["user_type_id"];
    
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
                    $this->load->view("Travel_planner/inc/invalid_user");
                }
            }

            if((!$this->session->email) && ($this->session->remail)){
                // Remember User Login Page
                $data= $this->user_model->get_user_details($this->session->remail);
                $this->load->view('Travel_planner/inc/logged_out',$data);
                return;
            }
            if($this->session->email){
                redirect(adminTravelPlannerUrl()."dashboard");
            }

            $this->load->view('Travel_planner/inc/header');
            $this->load->view('Travel_planner/index');
            $this->load->view('Travel_planner/inc/footer');
        }
        
    }
?>