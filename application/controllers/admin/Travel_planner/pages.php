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

            if((!$this->session->email) && ($this->session->remail)){
                $data= $this->user_model->get_user_details($this->session->remail);
                $this->load->view('admin/Travel_planner/inc/logged_out',$data);
                return;
            }
            if($this->session->email){
                redirect(adminTravelPlannerUrl()."dashboard");
            }

            $this->load->view('admin/Travel_planner/inc/header');
            $this->load->view('admin/Travel_planner/index');
            $this->load->view('admin/Travel_planner/inc/footer');
        }
        
    }
?>